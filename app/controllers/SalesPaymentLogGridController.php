<?php
///**
// * Created by PhpStorm.
// * User: LACHICA
// * Date: 10/6/14
// * Time: 6:37 PM
// */

class SalesPaymentLogGridController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('SalesPaymentLogGrid.index');
        //
    }
}