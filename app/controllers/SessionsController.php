<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// 
	}


	/**
	 * Show the form for logging in.
     * If already logged in, go to user profile page.
     * Otherwise, show the login form.
	 *
	 * @return Response
	 */
	public function create()
	{
        if(Auth::check()) return Redirect::route('userProfile.show', ['username' => Auth::user()->username]);
        
        return View::make('sessions.create');
	}


	/**
	 * Authenticate user.
     * If authentic, go to user profile page
     * Otherwise, go back to login page, with the previous inputs
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Auth::attempt(Input::only('username', 'password'))) {
//            return Redirect::to('/u/' . Auth::user()->username);
            return Redirect::route('userProfile.show', ['username' => Auth::user()->username]);
        }
        
        return Redirect::route('sessions.create')->withInput();
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
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Logout user and return to login page
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
        
        return Redirect::to('/');
	}


}
