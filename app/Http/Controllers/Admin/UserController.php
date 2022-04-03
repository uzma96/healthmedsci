<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NewAccountNotification;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('admin.user.index', compact('users'));
    }

    public function active($id)
    {
        User::find($id)->update(['status' => 1]);
        return redirect('admin/user');
    }

    public function block($id)
    {
        User::find($id)->update(['status' => 0]);
        return redirect('admin/user');
    }

    public function edit($id)
    {
        return redirect('admin/user');
    }

    public function update(Request $request)
    {
        return redirect('admin/user');
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect('admin/user');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'      => 'required|unique:users|email',
            'first_name' => 'required',
            'last_name'  => 'required',
            'role'       => 'required',
            'password'   => 'min:6|required',
        ]);
        $request->merge(['password' => bcrypt($request->password), 'password_text' => $request->password]);
        User::create($request->except('_token', 'mail_notify'));
        if ($request->mail_notify == 1) {
            new NewAccountNotification('New Registration Notification', ['email' => $request->email, 'password' => $request->password]);
        }
        return redirect('admin/user')->withSuccess('User created successfully');
    }
}
