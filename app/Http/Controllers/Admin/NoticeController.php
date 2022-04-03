<?php

namespace App\Http\Controllers\Admin;

use App\Models\Notice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::get();
        return view('admin.notice.index', compact('notices'));
    }

    public function create()
    {
        return view('admin.notice.create');
    }

    public function store(Request $request)
    {
        Notice::create([
            'notice_title' => $request->notice_title,
            'notice_date'  => $request->notice_date,
        ]);
        return redirect('admin/notice');
    }

    public function edit($id)
    {
        if(Auth::user()->role!='admin'){
            return redirect()->back();
        }
        $notice = Notice::find($id);
        return view('admin.notice.edit', compact('notice'));
    }

    public function update(Request $request,$id)
    {
        Notice::find($id)->update([
            'notice_title' => $request->notice_title,
            'notice_date'  => $request->notice_date,
        ]);
        return redirect('admin/notice');
    }

    public function delete($id)
    {
        if(Auth::user()->role!='admin'){
            return redirect()->back();
        }
        Notice::destroy($id);
        return redirect('admin/notice');
    }

    public function status($id,$status)
    {
        Notice::where('id',$id)->update(['status'=>$status]);
        return redirect('admin/notice');
    }
}
