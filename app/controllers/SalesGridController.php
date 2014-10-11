<?php

/**
 * Author: Denise Lachica
 */

class SalesGridController extends \BaseController {

	public function index()
	{
		return View::make('salesGrid.index');
	}

	public function create()
	{
		return View::make('salesGrid.create');
	}

	public function store()
	{
		$input = Input::all();
        
        // TODO validation
        
//        return $input;
        
//        return static::getTotalAmount($input['item'], $input['qty']);
        
        // Create Sales
        Sales::create([
            'customer_name' => $input['customer_name'],
            'customer_contact' => $input['customer_contact'],
            'added_by' => Auth::user()->id,
            'balance' => static::getTotalAmount($input['item'], $input['qty'])
        ]);
        
        // Create items in item breakdown
        
        return Redirect::route('salesGrid.index');
	}


    private static function getTotalAmount($products, $quantities) {
        
        $totalAmount = 0;
        
        for($i = 0; $i < sizeof($products); $i++) {
            
            $totalAmount += Product::find($products[$i])->selling_price * $quantities[$i];
        }
        
        return $totalAmount;
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
		return View::make('salesGrid.edit', ['id' => $id]);
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

	public function destroy($id)
	{
		$forDelete = Input::get('for_delete');
        
        foreach($forDelete as $sales) Sales::find($sales)->delete();
        
        return Redirect::route('salesGrid.index');
	}


}
