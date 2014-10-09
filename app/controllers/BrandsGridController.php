<?php

class BrandsGridController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('brandsGrid.index');
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('brandsGrid.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
        
		if(Brand::isValid($input)) 
        {
            // Add new brand name
            
            //return $input['brand_name'];
            
            Brand::create([
                'brand_name' => $input['brand_name']
            ]);
            
            return Redirect::route('brandsGrid.index');
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
		return View::make('brandsGrid.edit', ['brandsGrid' => $id]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
    {
		if(User::isValid(Input::all())) {
            $brand = Brand::find($id);
            $brand->brand_name = Input::get('brand_name');
            $brand->save();
            
            return Redirect::route('brandsGrid.index');
        }
        
        return "ERROR";
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$brandForDeletion = Input::get('for_delete');
        
        foreach($brandForDeletion as $brand) Brand::find($brand)->delete();
        
        return Redirect::route('brandsGrid.index');
	}

}
