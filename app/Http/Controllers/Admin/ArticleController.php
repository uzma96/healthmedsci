<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'admin') {
            $articles = Article::get();
        }else{
            $articles = Article::where('user_id',Auth::user()->id)->get();
        }
    	return view('article.index',compact('articles'));
    }

    public function create()
    {
    	return view('article.create');
    }

    public function store(Request $request)
    {
    	$input = $request->except('_token');
        $input['article_status'] = 0;
        $input['user_id'] = Auth::user()->id;
    	Article::create($input);
    	return redirect('admin/article');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit',compact('article'));
    }

    public function update(Request $request,$id)
    {
        $input = $request->except('_token');
        $input['user_id'] = Auth::user()->id;
        Article::find($id)->update($input);
        return redirect('admin/article');
    }

    public function delete($id)
    {
        Article::destroy($id);
        return redirect('admin/article');
    }

    public function active($id)
    {
        Article::find($id)->update(['article_status'=>1]);
        return redirect('admin/article');
    }
    
    
}
