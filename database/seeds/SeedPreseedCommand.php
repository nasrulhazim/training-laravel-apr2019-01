<?php

use Illuminate\Database\Seeder;

class SeedPreseedCommand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'name' => 'Superadmin',
        	'email' => 'superadmin@app.com',
        	'password' => bcrypt('password'),
        ]);
    }
}
