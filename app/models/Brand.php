<?php
    class Brand extends Eloquent
    {
        protected $table = "Brands";
        
        protected $fillable = ['brand_name'];
            public $timestamps = false;
        
            public static function isValid($input) {
        $validate = Validator::make($input, [
            'brand_name' => 'required'
        ]);
        
        return $validate->passes();
            }
    }
?>