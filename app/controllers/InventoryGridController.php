<?php
///**
// * Created by PhpStorm.
// * User: LACHICA
// * Date: 10/6/14
// * Time: 6:37 PM
// */

class InventoryGridController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('InventoryGrid.index');
        //
    }

//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return Response
//     */
////    public function create()
////    {
////        return View::make('InventoryGrid.create');
////    }
////
////
////    /**
////     * Store a newly created resource in storage.
////     *
////     * @return Response
////     */
////    public function store()
////    {
////        $input = Input::all();
//
////        if(Supplier::isValid($input)) {
//            // Create new user
////
////            return $input['user_type'];
////        {
////            Supplier::create([
////                'company' => $input['company'],
////                'address' => $input['address'],
////                'contact' => $input['contact'],
////                'contact_person' => $input['contact_person'],
////
////            ]);
////
////            return Redirect::route('InventoryGrid.index');
////        }
////return Redirect::back();
//
//
//}
//
//
/////**
//// * Display the specified resource.
//// *
//// * @param  int  $id
//// * @return Response
//// */
//
//public function show($id)
//{
//    //
//}
//
//
///**
// * Show the form for editing the specified user.
// *
// * @param  int  $id
// * @return Response
// */
//public function edit($id)
//{
//    return View::make('InventoryGrid.edit', ['InventoryGrid' => $id]);
//}
//
//
///**
// * Update the specified user in storage.
// *
// * @param  int  $id
// * @return Response
// */
//public function update($id)
//{
////    if(Supplier::isValid(Input::all()))
////    return Input::all();
//    {
//        $inventory = InventoryLog::find($id);
//        $inventory->company = Input::get('company');
//        $inventory->address = Input::get('address');
//        $inventory->contact = Input::get('contact');
//        $inventory->contact_person = Input::get('contact_person');
////            $user->password = Hash::make(Input::get('password'));
//        $inventory->save();
//
//        return Redirect::route('InventoryGrid.index');
//    }
//
////    return "ERROR";
//}
//
//
//
///**
// * Remove the specified resource from storage.
// *
// * @param  int  $id
// * @return Response
// */
//public function destroy($id)
//{
//    $supplierForDeletion = Input::get('for_delete');
//
//
//    foreach($inventoryForDeletion as $company) InventoryLog::find($company)->delete();
//
//    return Redirect::route('InventoryGrid.index');
//}
//

}
