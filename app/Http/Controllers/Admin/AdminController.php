<?php

namespace App\Http\Controllers\Admin;

use App\Models\Author;
use App\Models\Journal;
use App\Models\MyEmail;
use App\Models\ReviewerProfile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->role == 'reviewer') {
            $user = User::with('reviewer_profile')->find(Auth::user()->id);
            return view('admin.dashboard', compact('user'));
        } elseif(Auth::user()->role == 'admin') {
            $pending_journals = Journal::where('status', 1)->take(5)->orderBy('id', 'desc')->get();
            $live_journals = Journal::where('status', 6)->take(5)->orderBy('id', 'desc')->get();
            return view('admin.dashboard', compact('pending_journals', 'live_journals'));
        }
    }

    public function setting()
    {
        $user = User::find(Auth::user()->id);
        return view('admin.setting.index')->with('user', $user);
    }

    public function update_password(Request $request)
    {
        $this->validate(request(), [
            'current_password' => 'required',
            'password'         => 'min:6|required|confirmed'
        ]);
        $user = User::find(\request('user_id'));
        if (Hash::check($request->current_password, $user->password)) {
            $user->password = bcrypt($request->new_password);
        } else {
            $request->session()->flash('error', 'Your current password does not match');
            return redirect()->back();
        }
        $user->save();
        $request->session()->flash('success', 'Password Updated Successfully');
        return redirect()->back();

    }

    public function update_profile(Request $request)
    {
        if (Auth::user()->role == 'review') {
            $profile = ReviewerProfile::where('user_id', Auth::user()->id)->first();
            if (empty($profile)) {
                $profile = new ReviewerProfile();
                $profile->user_id = Auth::user()->id;
            }

            $profile->user_title = \request('user_title');
            $profile->first_name = \request('first_name');
            $profile->family_name = \request('family_name');
            $profile->user_initials = \request('user_initials');
            $profile->family_name = \request('family_name');
            $profile->job_title = \request('job_title');
            $profile->department = \request('department');
            $profile->organization = \request('organization');
            $profile->institution = \request('institution');
            $profile->principle_field = \request('principle_field');
            $profile->country = \request('country');
            $profile->phone = \request('phone');

            $profile->save();
        } elseif (Auth::user()->role == 'author') {
            $author = Author::where('user_id', Auth::user()->id)->first();
            $author->email = \request('email');
            $author->author_name = \request('author_name');
            $author->mobile = \request('mobile');
            $author->institute = \request('institute');
            $author->city = \request('city');
            $author->address = \request('address');
            $author->save();
        }
        $request->session()->flash('success', 'Your profile updated');
        return redirect()->back();
    }

    public function email()
    {
        $emails = MyEmail::with('sender')->where('receiver_id', Auth::user()->id)->get();
        return view('email.index', compact('emails'));
    }

    public function create_email()
    {
        $emails = User::where('role', 'admin')->get();
        return view('email.create', compact('emails'));
    }

    public function send_email(Request $request)
    {
        $email = new MyEmail();
        $email->sender_id = Auth::user()->id;
        $email->subject = \request('subject');
        $email->description = \request('description');
        $email->receiver_id = \request('receiver_id');
        $email->status = 3;
        $email->save();
        $request->session()->flash('success', 'Your Email send successfully');
        return redirect('admin/email');
    }
}
