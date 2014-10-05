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
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Check if old_password matches stored password.
        // Check if new_password === re_password.
        // If both are true, update password and go to user profile.
        // If not, go back.
        return 'UPDATE USER PASSWORD';
	}
}
