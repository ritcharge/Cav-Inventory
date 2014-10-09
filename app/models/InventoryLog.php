<?php
    class InventoryLog extends Eloquent {
        
        protected $table = 'inventory_logs';
        
        protected $fillable = ['product_id', 'quantity', 'transaction_type_id'];

    }
?>