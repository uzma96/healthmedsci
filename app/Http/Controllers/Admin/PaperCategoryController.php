<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaperCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaperCategoryController extends Controller
{
    public function index()
    {
        $results = PaperCategory::get();
        return view('admin.paper-category.index')
            ->with(compact('results'));
    }

    public function create()
    {
        return view('admin.paper-category.create');
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');
        PaperCategory::create($input);
        return redirect('admin/paper-category');
    }

    public function edit($id, Request $request)
    {
        if (Auth::user()->role == 'admin') {
            $result = PaperCategory::find($id);
            return view('admin.paper-category.edit', compact('result'));
        } else {
            $request->session()->flash('message', 'Unauthorized Action performed');
            return redirect('admin/paper-category');
        }
    }

    public function update(Request $request, $id)
    {
        $input = $request->except('_token');
        PaperCategory::find($id)->update($input);
        return redirect('admin/paper-category');
    }

    public function delete($id, Request $request)
    {
        if (Auth::user()->role == 'admin') {
            PaperCategory::destroy($id);
            return redirect('admin/paper-category');
        } else {
            $request->session()->flash('message', 'Unauthorized Action performed');
            return redirect('admin/paper-category');
        }
    }
}
