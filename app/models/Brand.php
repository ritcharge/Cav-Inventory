<?php
    class Brand extends Eloquent {
        
        protected $table = 'brands';
        
        protected $fillable = ['name'];
        
        public function products() {
            
            return $this->hasMany('Product');
        }
    }
?>