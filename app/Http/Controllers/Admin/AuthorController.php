<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = User::where('role','author')->get();
    	return view('admin.author.index' ,compact('authors'));
    }

    public function edit($id)
    {
    	$author = Author::find($id);
    	return view('admin.author.edit',compact('author'));
    }

    public function delete($id)
    {
        Author::destroy($id);
        return redirect('admin/author');
    }

    public function password_reset($id)
    {
        return view('admin.author.password')->with(compact('id'));
    }

    public function post_password_reset(Request $request,$id)
    {
        $input = $request->all();
        dd($input);
    }


}
