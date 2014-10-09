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
		$input = Input::all();
        
        // TODO validation
        
        Product::create([
            'product_name' => $input['product_name'],
            'selling_price' => $input['selling_price'],
            'quantity' => $input['quantity'],
            'product_type_id' => $input['product_type_id'],
            'brand_id' => $input['brand_id']
        ]);
        
        return Redirect::route('productsGrid.index');
	}


	public function show($id)
	{
        //
	}


	public function edit($id)
	{
		return View::make('productsGrid.edit', ['id' => $id]);
	}

	public function update($id)
	{
		$product = Product::find($id);
        $input = Input::all();
        
        // TODO validation
        
        $product->product_name = $input['product_name'];
        $product->selling_price = $input['selling_price'];
        $product->quantity = $input['quantity'];
        $product->product_type_id = $input['product_type_id'];
        $product->brand_id = $input['brand_id'];
        $product->save();
        
        return Redirect::route('productsGrid.index');
	}

	public function destroy($id)
	{
		//
	}


}
