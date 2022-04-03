<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $result = Testimonial::get();
        return view('admin.testimonial.index',compact('result'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->statement = $request->statement;
        $testimonial->username = $request->username;
        $testimonial->save();
        return redirect()->action('Admin\TestimonialController@index');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    public function update(Request $request,$id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->statement = $request->statement;
        $testimonial->username = $request->username;
        $testimonial->save();
        return redirect()->action('Admin\TestimonialController@index');
    }

    public function delete($id)
    {
        Testimonial::destroy($id);
        return redirect()->action('Admin\TestimonialController@index');
    }
}