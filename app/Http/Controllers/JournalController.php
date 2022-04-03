<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/6/2018
 * Time: 12:33 AM
 */

namespace App\Http\Controllers;


use App\Models\Journal;
use App\Models\Notice;
use App\Models\Page;
use App\Models\PaperCategory;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\Exception\Exception;
use PhpOffice\PhpWord\IOFactory;

class JournalController extends Controller
{
    public function index(Request $request)
    {
        $domain = $request->domain;
        $content = Page::where('page_url', 'about-international-journal-of-diabetes-obesity-and-cancer')->first();
        return view('journal.index', compact('content','domain'));
    }

    public function journal_new(Request $request)
    {
        $domain = $request->domain;
        $journals = Journal::with('authors')
            ->whereIn('status', [2, 3, 4])
            ->where('domain', $domain)
            ->orderBy('id', 'desc')
            ->take(5)->get();
//        dd($journals);
        $title = 'Early Online';
        return view('journal.lists', compact('journals', 'title'));
    }

    public function journal_current(Request $request)
    {
        $domain = $request->domain;
        $journals = Journal::with('authors')->where('domain', $domain)->where('status', 5)->orderBy('id', 'desc')->take(5)->get();
        $title = 'Current Issue';
        return view('journal.lists', compact('journals', 'title'));
    }

    public function most_viewed(Request $request)
    {
        $domain = $request->domain;
        $journals = Journal::with('authors')
            ->where('status', 5)
            ->where('domain', $domain)
            ->orderBy('no_of_view', 'desc')
            ->take(10)->get();
        $title = 'Most Viewed Articles';
        return view('journal.lists', compact('journals', 'title'));
    }

    public function archive(Request $request)
    {
        $domain = $request->domain;
        //$journals = Journal::with('authors')->where('status',6)->orderBy('id','desc')->take(5)->get();
        $journals = Journal::selectRaw('MONTH(created_at) month,MONTHNAME(created_at) m_name,YEAR(created_at) year,count(*) journal_no')
            ->where('domain', $domain)
            ->groupBy('month', 'year', 'm_name')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
//        dd($journals);
        $years = array_map(function ($a) {
            return $a['year'];
        }, $journals->toArray());
        $title = 'Archive';
        return view('journal.archive', compact('journals', 'title', 'years'));
    }

    public function view_archive(Request $request,$domain, $month, $year)
    {
        $title = "Journal Contents Issue -" . $month . ', ' . $year;
        $month = $month < 10 ? '0' . $month : $month;
        $journals = Journal::where('created_at', 'LIKE', $year . '-%')
            ->where('domain', $domain)
            ->where('created_at', 'LIKE', '%-' . $month . '-%')->get();
        return view('journal.lists', compact('journals', 'title'));
    }


    public function journal_view(Request $request, $domain,$id)
    {
        if (auth()->check() && auth()->user()->role == 'author') {
            $journal = Journal::where('journal_id', $id)
                ->where('domain', $domain)
                ->where('user_id', auth()->user()->id)->first();
            return view('journal.author.paper_details', compact('journal'));
        } else {
            $journal = Journal::where('journal_id', $id)
                ->where('domain', $domain)
                ->first();
            $journal->no_of_view += 1;
            $journal->save();
            return view('journal.details', compact('journal'));
        }
    }

    public function journal_search(Request $request)
    {
        $domain = $request->domain;
        if (!empty($request->q)) {
            $journals = Journal::where(function ($q) use ($request) {
                $q->where('paper_title', 'LIKE', '%' . $request->q . '%')
                    ->orWhere('keywords', 'LIKE', '%' . $request->q . '%');
            })
                ->where('domain', $domain)
                ->get();
        } else {
            $journals = [];
        }
        return view('journal.search', compact('journals'));
    }

    public function open_access_policy()
    {
        $content = Page::where('page_url', 'journal-open-access-policy')->first();
        return view('journal.page', compact('content'));
    }

    public function announcement()
    {
        $content = Page::where('page_url', 'journal-announcement')->first();
        return view('journal.page', compact('content'));
    }

    public function contact()
    {
        return view('journal.contact');
    }

    public function faq()
    {
        return view('journal.faq');
    }

    public function page($id)
    {
        if (is_numeric($id)) {
            $page = Page::where('page_id', $id)->first();
        } else {
            $page = Page::where('page_url', $id)->first();
        }
        return view('journal.page')->with('content', $page);
    }


}