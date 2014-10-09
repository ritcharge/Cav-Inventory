<?php

class ProductsGridController extends \BaseController {

	public function index()
	{
		return View::make('productsGrid.index');
	}


	public function create()
	{
		return View::make('productsGrid.create');
	}


	public function store()
	{
		//
	}


	public function show($id)
	{
        //
	}


	public function edit($id)
	{
		return View::make('producstsGrid.edit', ['id' => $id]);
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}


}
