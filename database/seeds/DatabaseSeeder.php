<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
        	'id'=> '1',
            'name' => 'user',
            'created_at' => Carbon::now(),
        ]);
        DB::table('levels')->insert([
            'id'=> '2',
            'name' => 'Administrator',
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id'=> '1',
            'name' => 'Admin',
            'level_id'=> '2',
            'email' => 'admin',
            'password' => bcrypt('sirius'),
            'created_at' => Carbon::now(),
        ]);
        
    }
}
