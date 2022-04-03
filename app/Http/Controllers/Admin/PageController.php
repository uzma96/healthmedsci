<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::get();
        return view('admin.page.index',compact('pages'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');
        // dd($input);
        $input['page_id'] = getPageId();
        $input['page_url'] = $input['page_url'];
        Page::create($input);
        return redirect('admin/page');
    }

    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.page.edit',compact('page'));
    }

    public function update(Request $request,$id)
    {
        $input = $request->except('_token');
        // dd($input);
        $input['page_id'] = getPageId();
        $input['page_url'] = $input['page_url'];
        Page::find($id)->update($input);
        return redirect('admin/page');
    }

    public function delete($id)
    {
        Page::destroy($id);
        return redirect('admin/page');
    }

    public function status($id,$status)
    {
        Page::find($id)->update(['status'=>$status]);
        return redirect('admin/page');
    }
}
