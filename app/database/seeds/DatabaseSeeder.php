<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('UserTypesTableSeeder');
		$this->call('UserTableSeeder');
        $this->call('ProductTypeSeeder');
        $this->call('BrandSeeder');
        
        $this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {
    
    public function run() {
        DB::table('users')->delete();
        User::create([
            'username' => 'superadmin',
            'password' => Hash::make('12345'),
            'type' => 1,
            'first_name' => 'R',
            'last_name' => 'Daitan'
        ]);
    }
}

class UserTypesTableSeeder extends Seeder {
    
    public function run() {
        DB::table('user_types')->delete();
        DB::table('user_types')->insert([
            ['description' => 'Administrator'],
            ['description' => 'Standard']
        ]);
    }
}

class ProductTypeSeeder extends Seeder {
    
    public function run() {
        $productTypes = [
            'Antivirus', 'AVR', 'Casing', 'CPU Fan', 'Custom PC', 'Custom Server', 'Desktop PC', 'External Optical Drive', 
            'Game Controller', 'Hard Disk Drive', 'Internal Optical Drive', 'Keyboard', 'Laptop', 'Memory', 'Memory Card and Reader', 
            'Microsoft Products', 'Modem', 'Monitor', 'Motherboard', 'Mouse', 'Mouse and Keyboard Combo', 'Netbook', 'Networking Products', 
            'Other Software', 'POS Harware', 'POS Software', 'Power Supplies', 'Processor', 'Projector', 'Scanner', 'Server', 'Smartphone', 
            'Sound card', 'Speaker', 'Tablet PC', 'TV Tuner/Card', 'UPS', 'Video Card', 'Webcam'
        ];
        
        DB::table('product_types')->delete();
        
        foreach($productTypes as $type) ProductType::create(['description' => $type]);
    }
}

class BrandSeeder extends Seeder {
    
    public function run() {
        
        $brands = ['DELL', 'HP', 'Asus', 'Intel', 'Epson', 'Acer', 'Fujitsu', 'Seagate', 'Asustek', 'Redfox', 'IBM', 'Infocus'];
        
        DB::table('brands')->delete();
        
        foreach($brands as $brand) Brand::create(['name' => $brand]);
    }
}