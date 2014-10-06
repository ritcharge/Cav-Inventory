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
            
//            return $input['user_type'];
            
            User::create([
                'username' => $input['username'],
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'type' => $input['user_type'],
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
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('usersGrid.edit', ['usersGrid' => $id]);
	}


	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if(User::isValid(Input::all())) {
            $user = User::find($id);
            $user->username = Input::get('username');
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            $user->type = Input::get('user_type');
//            $user->password = Hash::make(Input::get('password'));
            $user->save();
            
            return Redirect::route('usersGrid.index');
        }
        
        return Redirect::back()->withInput();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$usersForDeletion = Input::get('for_delete');
        
        foreach($usersForDeletion as $user) User::find($user)->delete();
        
        return Redirect::route('usersGrid.index');
	}


}
