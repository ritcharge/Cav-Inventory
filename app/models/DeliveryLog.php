<?php
    class DeliveryLog extends Eloquent {
        
        protected $table = 'delivery_logs';
        
        protected $fillable = ['item_id', 'quantity'];

        public function item() {
            
            return $this->belongsTo('ItemBreakdown', 'item_id');
        }
    }
?>