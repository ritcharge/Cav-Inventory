<?php
    class ItemBreakdown extends Eloquent {
        
        protected $table = 'item_breakdown';
        
        protected $fillable = ['sales_id', 'product_id', 'quantity', 'delivered_qty'];

    }
?>