<?php
    class ProductType extends Eloquent {
        
        protected $table = 'product_types';
        
        protected $fillable = ['description'];
        
        public function products() {
            
            return $this->hasMany('Product', 'product_type_id');
        }
    }
?>