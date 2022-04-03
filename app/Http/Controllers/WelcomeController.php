<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 7/6/2018
 * Time: 12:51 AM
 */

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Journal;
use App\Models\Page;
use App\Models\Testimonial;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('web.welcome');
    }





    public function article()
    {
        return view('web.article');
    }

    public function article_details($id)
    {
        $article = Article::find($id);
        return view('web.article_details',compact('article'));
    }

    public function about()
    {
        return view('web.about',compact('notices'));
    }

    public function journal_details($id,Request $request)
    {
        $journal = Journal::find($id);
        return view('web.journal_details',compact('journal','notices'));
    }

    public function main_contact()
    {
        return view('web.contact');
    }

    public function help()
    {
        return view('web.help');
    }



    public function testimonial()
    {
        $testimonials = Testimonial::get();
        return view('web.testimonial',compact('testimonials'));
    }

    public function page($page_url)
    {
        $result = Page::where('page_url',$page_url)
            ->first();
        if(empty($result)){
            return redirect('/');
        }
        return view('web.main_static',compact('result'));
    }
}