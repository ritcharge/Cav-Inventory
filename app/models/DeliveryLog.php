<?php
    class DeliveryLog extends Eloquent {
        
        protected $table = 'delivery_logs';
        
        protected $fillable = ['item_id', 'quantity'];

    }
?>