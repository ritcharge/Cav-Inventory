<?php
    class Brand extends Eloquent {
        
        protected $table = 'brands';
        
        protected $fillable = ['name'];
        
        public function products() {
            
            return $this->hasMany('Product');
        }
        public static $errors;
        public static function isValid($input) {
        $validate = Validator::make($input, [
            'name' => 'required'       ]);
        
        $validation_result = $validate->passes();
        // To call static variables in a class, use static::$variable
        static::$errors = $validate->messages();
        
        return $validation_result;
    }
    }
?>