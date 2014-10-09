<?php
    class SalesPaymentLog extends Eloquent {
        
        protected $table = 'sales_payment_logs';
        
        protected $fillable = ['sales_id', 'amount', 'receipt_number'];

    }
?>