<?php
    class Sales extends Eloquent {
        
        protected $table = 'sales';
        
        protected $fillable = ['customer_name', 'customer_contact', 'added_by', 'balance'];

    }
?>