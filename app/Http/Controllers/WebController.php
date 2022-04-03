<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\Author;
use App\Models\Journal;
use App\Models\Notice;
use App\Models\PaperCategory;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{





    public function activate_account(Request $request)
    {
        $activation_code = \request('activation_code');
        $check = User::where('activation_code', $activation_code)->first();
        if (!empty($check)) {
            $check->activation_code = '1';
            $check->status = 1;
            $check->save();
            $request->session()->flash('message', 'Account activated successfully');
            return redirect('login');
        }
        $request->session()->flash('message', 'Invalid activation link.');
        return redirect('login');
    }

    public function send_mail($to, $subject, $link)
    {
        Mail::send('email.demo', compact('link'), function ($message) use ($to, $subject) {
            $message->from('alam.ifta@gmail.com', 'System Admin');
            $message->sender('alam.ifta@gmail.com', 'System Admin');
            $message->to($to, 'Bappa Raz');
            $message->subject($subject);
        });
    }

    public function send_email()
    {
        try {
            $this->send_mail('bappa2du@gmail.com', 'hello world', 'link');
        } catch (\Exception $e) {
            return $e;
        }
    }


}
