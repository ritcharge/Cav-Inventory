<?php
/**
 * Author: R Daitan
 * 
 */
class Product extends Eloquent {
   
    protected $table = 'products';
    
    protected $fillable = ['product_name', 'selling_price', 'quantity', 'product_type_id', 'brand_id'];
    
    public function brand() {
        
        return $this->belongsTo('Brand');
    }
    
    public function type() {
        
        return $this->belongsTo('ProductType', 'product_type_id');
    }
    
    public function logs() {
        
        return $this->hasMany('InventoryLog');
    }
}