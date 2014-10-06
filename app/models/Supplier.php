<?php
/**
 * Created by PhpStorm.
 * User: LACHICA
 * Date: 10/5/14
 * Time: 9:34 PM
 */
Class Supplier extends Eloquent {

    protected $table = 'suppliers';
    protected $fillable = ['company', 'address', 'contact', 'contact_person'];
}
?>