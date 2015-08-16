<?php
namespace Horsefly\Http\Controllers;



use Horsefly\Http\Requests;
use Horsefly\Http\Controllers\Controller;

use Horsefly\Article;
use Horsefly\User;
use Hash;
use Request;
use Auth;

use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {    
        if (Auth::check()) {
            $articles = Article::where('user_id', '=', Auth::user()->id)->get();        
            return view('articles.index',compact('articles'))->with('page_title','My Articles')->with('username',Auth::user()->name);    
        }
        else {
            return redirect('/auth/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if (Auth::check()) {        
        return view('articles.create')->with('page_title','Create article')->with('username',Auth::user()->name);    
    }
        else {
            return redirect('/auth/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $article = new Article;
        $article->title = Request::get('title');
        $article->body = Request::get('body');
        $article->user_id = Auth::user()->id;
        $article->save();        

        return redirect('/articles')->with('ArticleAdded','Added')->with('username',Auth::user()->name);    ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article= Article::findOrFail($id);
        return view('articles.show',compact('article'))->with('page_title',$article->title)->with('username',Auth::user()->name);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $article= Article::find($id);
        if($article->user_id == Auth::user()->id) {
        return view('articles.edit',compact('article'))->with('page_title','Edit article')->with('username',Auth::user()->name);    
    }
        else {
            return redirect('/articles');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = Request::get('title');
        $article->body = Request::get('body');
        $article->save();        
        return redirect('/articles/'.$id.'/edit')->with('ArticleUpdated','updated')->with('username',Auth::user()->name);    ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if($article->user_id == Auth::user()->id) {
        $article->delete();
        return redirect('/articles')->with('ArticleDeleted', 'Deleted')->with('username',Auth::user()->name);
    }
    else { 
        return redirect('/articles');
    }

    }

    public function search()
    {
        if (Auth::check()) {        
            $text=  Input::get('query');
        $articles = Article::where('title', 'LIKE', '%'.$text.'%')->get();        
        return view('/index',compact('articles')) -> with('page_title','Search:'.$text)->with('username',Auth::user()->name);    
    }
        else {
            return redirect('/auth/login');
        }        
    }
}
