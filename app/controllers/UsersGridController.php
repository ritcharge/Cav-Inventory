<?php

class UsersGridController extends \BaseController {

	/**
	 * Display a listing of the users.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('usersGrid.index');
	}


	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usersGrid.create');
	}


	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::all();
        
		if(User::isValid($input)) {
            // Create new user
            User::create([
                'username' => $input['username'],
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'type' => (int) $input['user_type'],
                'password' => Hash::make($input['password'])
            ]);
            
            return Redirect::route('usersGrid.index');
        }
        
        return Redirect::back();
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
