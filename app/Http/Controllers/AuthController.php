<?php

namespace App\Http\Controllers;

use App\Mail\PasswordRecovery;
use App\Mail\PasswordResetMail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {
        return view('journal.register');
    }

    public function post_register(Request $request)
    {
        try {
            $this->validate(request(), [
                'email'      => 'required|unique:users|email',
                'password'   => 'required|min:6|confirmed',
                'first_name' => 'required',
                'last_name'  => 'required',
                'gender'     => 'required',
            ]);

            $activation_code = sha1(str_shuffle(time() . rand(100000, 999999)));

            User::create([
                'email'           => request('email'),
                'first_name'      => request('first_name'),
                'gender'          => request('gender'),
                'last_name'       => request('last_name'),
                'salutation'      => request('salutation'),
                'affiliation'     => request('affiliation'),
                'orcid_id'        => request('orcid_id'),
                'phone'           => request('phone'),
                'mailing_address' => request('mailing_address'),
                'country'         => request('country'),
                'password'        => bcrypt(request('password')),
                'role'            => 'author',
                'status'          => 1,
                'reset_token'     => $activation_code,
            ]);

//            $link = env('APP_URL') . '/active-account?activation_code=' . $activation_code;
//            if (\request('user_type') == 'review') {
//                $this->send_mail('bappa2du@gmail.com', 'Activation Mail', $link);
//                $request->session()->flash('success', 'Activation link sent to your email');
//            }
            return redirect('journal/login')->withSuccess('Registration success please login to your account');

        } catch (\Exception $exception) {
            return redirect('journal/register')->withError('Registration failed due to ' . $exception->getMessage());
        }

//        return redirect('login')->withInput();
    }

    public function send_mail($to, $subject, $link)
    {
        try {
            Mail::send('email.demo', compact('link'), function ($message) use ($to, $subject) {
                $message->from('alam.ifta@gmail.com', 'System Admin');
                $message->sender('alam.ifta@gmail.com', 'System Admin');
                $message->to($to, 'Bappa Raz');
                $message->subject($subject);
            });
        } catch (\Exception $exception) {
            return response($exception->getMessage(), 400);
        }
    }

    public function journal_login()
    {
        if (\auth()->check()) {
            if (\auth()->user()->role == 'author')
                return redirect('author/dashboard');
            else
                return redirect('admin/dashboard');
        } else
            return view('journal.login');
    }

    public function journal_authenticate(Request $request)
    {
        $this->validate(request(), [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        $check_status = User::where('email', $request->email)->first();


        if (empty($check_status)) {
            return redirect('journal/login')->withError('Account Not Found. Please Register new account');
        }

        if ($check_status->status == 1) {
            if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
                if (\auth()->user()->role == 'author')
                    return redirect()->intended('author/dashboard');
                else
                    return redirect('admin/dashboard');
            }
            return redirect('journal/login')->withError('Invalid email/password combination');
        } else {
            return redirect('journal/login')->withError('Inactive Account');
        }
    }

    public function admin_login()
    {
        return view('admin.auth.login');
    }

    public function admin_authenticate(Request $request)
    {
        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
            'status'   => 1
        ];
        if (auth()->attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        } else {
            $request->session()->flash('message', 'Invalid Login');
            return redirect('secure/login')->withInput();
        }
    }

    public function forget_password()
    {
        return view('journal.forget_password');
    }

    public function post_forget_password(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required'
        ]);
        $email = $request->email;
        $check = User::where('email', $email)->where('role', 'author')->first();
        if (empty($check)) {
            return redirect()->back()->withError('This email is not found in our system. Please use correct Email Address');
        }
        if (!empty($check->reset_token)) {
            return redirect()->back()->withError('A password-reset request already pending. Please ckeck your email');
        }
        $token = sha1(time());
        $check->reset_token = $token;
        $check->save();
        //$helper = new Helper();
        $url = env('APP_URL') . "/journal/reset-password?token=" . $token;
//        dd($url);
        //$helper->sendMail($email, 'Elibrary:Password Reset Link', $token);
        Mail::to([$email])
            ->send(new PasswordResetMail($url));
        return redirect('/journal/forget-password')->withSuccess('Password reset-link sent your registered mail');
    }

    public function reset_password(Request $request)
    {
        $token = $request->token;
        $available = User::where('reset_token', $token)->first();
        if (empty($available)) {
            return redirect('/journal/login')->withError('This request already expired.');
        }
        return view('journal.reset_password')->with(['token' => $token]);
    }

    public function post_reset_password(Request $request)
    {
        $this->validate($request, [
            'token'    => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        $token = $request->token;
        $available = User::where('reset_token', $token)->first();
        if (empty($available)) {
            return redirect('/journal/login')->withError('This request already expired.');
        }
        $available->reset_token = '';
        $available->password = bcrypt($request->password);
        $available->save();
        return redirect('/journal/login')->withSuccess('Password Update Successful. Please login with new password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/journal/login');
    }
}
