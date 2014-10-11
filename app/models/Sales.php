<?php
    class Sales extends Eloquent {
        
        protected $table = 'sales';
        
        protected $fillable = ['customer_name', 'customer_contact', 'added_by', 'balance'];

        public function addedBy() {
            
            return $this->belongsTo('User', 'added_by');
        }
        
        public function payments() {
            
            return $this->hasMany('SalesPaymentLog');
        }
        
        public function items() {
            
            return $this->hasMany('ItemBreakdown');
        }
    }
?>