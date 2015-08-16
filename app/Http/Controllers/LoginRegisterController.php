<?php
namespace Horsefly\Http\Controllers;



use Horsefly\Http\Requests;
use Horsefly\Http\Controllers\Controller;

use Horsefly\Article;
use Horsefly\User;
use Hash;
use Request;
use Auth;

class LoginRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {        
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

    public function logout()
    {
        Auth::logout();
        return redirect('/auth/login')->with('username','');
    }

public function signup()
    {
        $user = new User;
        $user->name = Request::get('name');
        $user->email = Request::get('email');
        $user->password = Hash::make('password');
        $user->save();

        //logged in
        Auth::loginUsingId($user->id);        

        return redirect('/home');

    }

    public function login()
    {
        $login = Auth::attempt(array('email' => Request::get('email'), 'password' => Request::get('password')));
        if ($login) {
            return redirect('/home');
        }
        else {            
            return redirect('/auth/login')->with('error','Email or password not correct!');    
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
