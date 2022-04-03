<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/6/2018
 * Time: 2:05 PM
 */

namespace App\Http\Controllers;


use App\Mail\JournalModifiedToAdmin;
use App\Mail\NewPublicationToAdmin;
use App\Models\Journal;
use App\Models\JournalAuthor;
use App\Models\JournalDetails;
use App\Models\Notice;
use App\Models\PaperCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use DB;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('author');
    }
   
   
   
    public function dashboard()
    {
        return view('journal.author.dashboard')->with([
            'journals' => Journal::where('user_id', auth()->user()->id)->where('status', '!=', '-1')->orderBy('id', 'desc')->take(10)->get()
        ]);
    }
    
        public function newFile(Request $request)
    {
         if (!$request->journal_id) {
            return redirect('author/newFile?journal_id=' . $this->journal_id());
        }
        $category = PaperCategory::get();
//        $notices = Notice::where('status', '1')->get();
        $journal_id = $request->journal_id;
        $user = auth()->user();
        
        return view('journal.author.newFile',compact('category', 'journal_id'));
    }

    public function profile()
    {
        return view('journal.author.profile')->with(['user' => auth()->user()]);
    }

    public function journal_id()
    {
        $journal = Journal::where('status', '-1')->where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')->first();
        if (!empty($journal)) {
            return $journal->journal_id;
        }

        $journal = Journal::orderBy('id', 'desc')->first();
        if (empty($journal)) {
            $journal_id = 600001;
            Journal::create(['status' => '-1', 'journal_id' => $journal_id, 'user_id' => auth()->user()->id]);
            return $journal_id;
        }
        $journal_id = $journal->journal_id + 1;
        Journal::create(['status' => '-1', 'journal_id' => $journal_id, 'user_id' => auth()->user()->id]);
        return $journal_id;
    }
  //new code for manuscript submission
  
    public function menuscript_form(){
        
        
    return view('journal.author.submit_menuscript');

    }
    
    

//end of new code for manuscript submission 
    public function add_author_to_menuscript($journal_id, $salutation, $first_name, $last_name, $affiliation, $email,$tel, $correspondent_author, $country,$orcid_id)
    {
        try {
            $exists = JournalAuthor::where('email', $email)->where('journal_id', $journal_id)->first();
            if (empty($exists)) {
                JournalAuthor::create([
                    'journal_id'           => $journal_id,
                    'salutation'           => $salutation,
                    'first_name'           => $first_name,
                    'last_name'            => $last_name,
                    'affiliation'          => $affiliation,
                    'country'              => $country,
                    'correspondent_author' => $correspondent_author,
                    'email'                => $email,
                    'tel'                  => $tel,
                    'orcid_id'             =>$orcid_id
                ]);
            }
        } catch (\Exception $exception) {
            //dd($exception->getMessage());
            return false;
        }
        return true;

    }

    public function menuscript(Request $request)
    {
        if (!$request->journal_id) {
            return redirect('author/submit-menuscript?journal_id=' . $this->journal_id());
        }
        $category = PaperCategory::get();
//        $notices = Notice::where('status', '1')->get();
        $journal_id = $request->journal_id;
        $user = auth()->user();
        $this->add_author_to_menuscript($journal_id, $user->salutation, $user->first_name, $user->last_name, $user->affiliation, $user->email, 1, $user->country, $user->orcid_id, $user->tel);
        return view('journal.author.menuscript', compact('category', 'journal_id'));
    }

    public function store_author(Request $request)
    {
        $this->add_author_to_menuscript($request->journal_id, $request->salutation, $request->first_name, $request->last_name, $request->affiliation,$request->orcid_id, $request->tel, $request->correspondent_author, $request->email, 0, $request->country);
        return response()->json('Success', 200);
    }

    public function document_upload(Request $request)
    {
        $this->validate($request, [
            'document'   => 'required|file|mimes:doc,docx,png,jpg,jpeg',
            'journal_id' => 'required',
        ], [
            'document.mimes' => 'Uploaded document must be image or word document'
        ]);
        $document = $request->document->store('journals');
        $name = $request->document->getClientOriginalName();
        JournalDetails::create([
            'journal_id'    => $request->journal_id,
            'document_name' => $name,
            'document_src'  => $document,
            'document_type' => 'Menuscript',
            'status'        => 1,
        ]);
        return response()->json('Success', 200);
    }

    public function update_document_type(Request $request)
    {
        $details = JournalDetails::find($request->id);
        $details->document_type = $request->document_type;
        $details->save();
        return response()->json('Success', 200);
    }

    public function update_document_name(Request $request)
    {
        $details = JournalDetails::find($request->id);
        $details->document_name = $request->name;
        $details->save();
        return response()->json('Success', 200);
    }

    public function delete_document(Request $request, $id)
    {
        $src = JournalDetails::find($id);
        Storage::delete($src->document_src);
        $src->delete();
        return response()->json('Success', 200);
    }

    public function delete_author($id)
    {
        JournalAuthor::destroy($id);
        return response()->json('Success', 200);
    }

    public function load_document_table($journal_id)
    {
        $documents = JournalDetails::where('journal_id', $journal_id)->get();
        return view('journal.author.table.document_table')->with(compact('documents'));
    }

    public function load_author_table($journal_id)
    {
        $authors = JournalAuthor::where('journal_id', $journal_id)->get();
        return view('journal.author.table.author_table')->with(compact('authors'));
    }

    public function temp_store_menuscript(Request $request)
    {
        $domain = $request->domain;
        $this->validate(request(), [
            'abstract'    => 'required',
            'keywords'    => 'required',
            'paper_title' => 'required',
        ]);

        Journal::create([
            'paper_title'      => $request->paper_title,
            'abstract'         => $request->abstract,
            'area_of_research' => $request->area_of_research,
            'user_id'          => auth()->user()->id,
            'journal_id'       => $request->journal_id,
            'keywords'         => $request->keywords,
            'doi'              => $request->doi,
            'article_type'     => $request->article_type,
            'status'           => 0,
            'domain'           => $domain
        ]);

//        Mail::to(adminEmails())
//            ->send(new NewPublicationToAdmin('New Publication Notification', loginUrl()));
        return redirect('author/dashboard')->with('success', 'Menuscript stored Successfully');
    }

    public function store_menuscript(Request $request)
    {
        $this->validate(request(), [
            'abstract'    => 'required',
            'keywords'    => 'required',
            'paper_title' => 'required',
        ]);

        Journal::where('journal_id', $request->journal_id)
            ->update([
                'paper_title'      => $request->paper_title,
                'abstract'         => $request->abstract,
                'area_of_research' => $request->area_of_research,
                'keywords'         => $request->keywords,
                'doi'              => $request->doi,
                'article_type'     => $request->article_type,
                'status'           => 1,
                'domain'           => $request->domain,
            ]);

        Mail::to(adminEmails())
            ->send(new NewPublicationToAdmin('New Publication Notification', loginUrl()));
        return redirect('author/dashboard')->with('success', 'Menuscript submitted Successfully');
    }

    public function update_password()
    {
        return view('journal.author.update_password');
    }

    public function pendingIssue(Request $request)
    {
        $domain = $request->domain;
        return view('journal.author.pending_issue')->with([
            'journals' => Journal::where('user_id', auth()->user()->id)
                ->where('domain',$domain)
                ->where('status', 0)->get()]);
    }

    public function submittedIssue(Request $request)
    {
        $domain = $request->domain;
        return view('journal.author.submitted_issue')->with([
            'journals' => Journal::where('user_id', auth()->user()->id)
                ->where('domain',$domain)
                ->whereIn('status', [1, 2, 3, 4])
                ->get()]);
    }

    public function published(Request $request)
    {
        $domain = $request->domain;
        return view('journal.author.published')->with([
            'journals' => Journal::where('user_id', auth()->user()->id)
                ->where('domain',$domain)
                ->where('status', 5)->get()]);
    }

    public function rejected(Request $request)
    {
        $domain = $request->domain;
        return view('journal.author.rejected')->with([
            'journals' => Journal::where('user_id', auth()->user()->id)
                ->where('domain',$domain)
                ->where('status', 6)->get()]);
    }

    public function edit_journal($journal_id)
    {
        $journal = Journal::where('journal_id', $journal_id)->first();
        $category = PaperCategory::get();
        return view('journal.author.journal_edit')->with([
            'journal'    => $journal,
            'journal_id' => $journal_id,
            'category'   => $category
        ]);
    }

    public function update_menuscript(Request $request, $journal_id)
    {
        $this->validate(request(), [
            'abstract'    => 'required',
            'keywords'    => 'required',
            'paper_title' => 'required',
        ]);

        $journal = Journal::where('journal_id', $journal_id)->first();
        $journal->paper_title = $request->paper_title;
        $journal->abstract = $request->abstract;
        $journal->area_of_research = $request->area_of_research;
        $journal->keywords = $request->keywords;
        $journal->article_type = $request->article_type;
        $journal->keywords = $request->keywords;
        if ($journal->status == 3)
            $journal->status = 4;
        $journal->save();

        Mail::to(adminEmails())
            ->send(new JournalModifiedToAdmin('Publication Modification Notification', loginUrl()));
        return redirect('author/dashboard')->with('success', 'Menuscript submitted Successfully');
    }

}