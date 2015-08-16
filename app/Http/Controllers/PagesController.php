<?php

namespace Horsefly\Http\Controllers;

use Illuminate\Http\Request;

use Horsefly\Http\Requests;
use Horsefly\Http\Controllers\Controller;

use Horsefly\Article;
use Auth;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Auth::check()) {            
            $articles = Article::Join('users', 'users.id' , '=', 'articles.user_id' )
            ->get(array('articles.*','users.name'));

            return view('index',compact('articles'))->with('page_title','My Articles')->with('username',Auth::user()->name);    
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
