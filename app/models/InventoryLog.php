<?php
    class InventoryLog extends Eloquent {
        
        protected $table = 'inventory_logs';
        
        protected $fillable = ['product_id', 'quantity', 'transaction_type_id'];

        public function product() {
            
            return $this->belongsTo('Product');
        }
    }
?>