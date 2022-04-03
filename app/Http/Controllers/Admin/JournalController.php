<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use App\Models\JournalReview;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class JournalController extends Controller
{
    public function index()
    {
        try{
            if (Auth::user()->role == 'reviewer') {
                $id = Auth::user()->id;
//            dd($id);
                $journals = Journal::whereHas('reviewer', function ($q) use ($id) {
                    $q->where('reviewer_id', '=', $id);
                })->where('status','!=','-1')->get();
            } else {
                $journals = Journal::where('status','!=','-1')->get();
            }
            return view('admin.journal.index', compact('journals'));
        }catch (\Exception $e){
            return response($e->getMessage(),400);
        }
    }

    public function create()
    {
        return view('admin.journal.create');
    }

    public function store(Request $request)
    {
        $input = $request->except('_token');
        Journal::create($input);
        return redirect('admin/journal');
    }

    public function view_review($id)
    {
        $journal = Journal::find($id);
        return view('admin.journal.view_review', compact('journal'));
    }

    public function review($id)
    {
        $journal = Journal::find($id);
        return view('admin.journal.review', compact('journal'));
    }

    public function post_review($id, Request $request)
    {
        $this->validate($request, [
            'comment'    => 'required|min:20',
            'attachment' => 'file|mimes:pdf,doc,docx,jpg,jpeg',
        ], [
            'attachment.mimes' => 'The Journal File must has pdf,doc,docx,jpg or jpeg extension',
            'comment.min'      => 'The Comment length is too short'
        ]);
        $jr = JournalReview::where('journal_id', $request->journal_id)->where('reviewer_id', \auth()->user()->id)->first();
        if ($request->hasFile('attachment')) {
            $jr->document = $request->attachment->store('review');
        }
        $jr->comment = $request->comment;
        $jr->status = $request->status;
        $jr->save();
        $journal = Journal::where('journal_id', $request->journal_id)->first();
        if ($request->status == 1)
            $journal->status = 5;
        elseif ($request->status == 4)
            $journal->status = 6;
        else
            $journal->status = 3;
        $journal->save();
        return redirect('admin/journal')->with('success', 'Reviewed Successfully');
    }

    public function delete($id)
    {
        $j = Journal::find($id);
        Storage::delete($j->paper_file);
        Journal::destroy($id);
        return redirect('admin/journal');
    }

    public function active($id)
    {
        Journal::find($id)->update(['status' => 1]);
        return redirect('admin/journal');
    }

    public function details($id)
    {
        $journal = Journal::find($id);
//        dd($journal->authors);
        $reviewers = User::where('role', 'reviewer')->get();
        return view('admin.journal.details', compact('journal', 'reviewers'));
    }

    public function archive()
    {
        if (Auth::user()->role == 'reviewer') {
            $journals = Journal::where('reviewer_id', Auth::user()->id)->where('status','!=','-1')->get();
        } elseif (Auth::user()->role == 'author') {
            $journals = Journal::where('user_id', Auth::user()->id)->get();
        } else {
            $journals = Journal::where('status','!=','-1')->get();
        }
        return view('admin.journal.index', compact('journals'));
    }

    public function update_status($id, $status)
    {
        Journal::find($id)->update(['status' => $status]);
        return redirect('admin/journal');
    }

    public function send_to_reviewer(Request $request)
    {
        $this->validate($request, ['reviewer_id' => 'required']);
        foreach ($request->reviewer_id as $r) {
            $jr = new JournalReview();
            $jr->reviewer_id = $r;
            $jr->journal_id = $request->journal_id;
            $jr->status = 0;
            $jr->save();
        }
        Journal::where('journal_id', $request->journal_id)->update(['status' => 2]);
        return redirect('admin/journal')->with(['success' => 'Journal successfully assigned to Reviewer']);
    }

    public function review_report()
    {
        $journals = Journal::where('status', 5)->get();
        return view('admin.journal.index', compact('journals'));
    }
}
