<?php
    class ItemBreakdown extends Eloquent {
        
        protected $table = 'item_breakdown';
        
        protected $fillable = ['sales_id', 'product_id', 'quantity', 'delivered_qty'];

        public function sales() {
            
            return $this->belongsTo('Sales');
        }
        
        public function product() {
            
            return $this->belogsTo('Product');
        }
        
        public function logs() {
            
            return $this->hasMany('DeliveryLog');
        }
    }
?>