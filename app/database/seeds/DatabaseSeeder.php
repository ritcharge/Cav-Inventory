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