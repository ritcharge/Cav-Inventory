<?php

class UserProfileController extends \BaseController {
    
    function __construct() {
        $this->beforeFilter('auth');
    }
    
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		// SHOW USER PROFILE
        return View::make('userProfile.show', ['username' => $username]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		return View::make('userProfile.edit', ['username' => $username]);
	}


	/**
	 * Update the password of the user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username)
	{
        $user = Auth::user();
        $validation = Validator::make(Input::all(), [
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required'
        ]);
        
        if($validation->fails()) return Redirect::back();
        
        if(!Hash::check(Input::get('old_password'), $user->password)) return Redirect::back();
        
        $user->password = Hash::make(Input::get('new_password'));
        $user->save();
        
        return Redirect::to('/logout');
	}
}
