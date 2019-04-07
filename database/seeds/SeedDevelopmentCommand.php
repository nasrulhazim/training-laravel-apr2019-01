<?php

use Illuminate\Database\Seeder;

class SeedDevelopmentCommand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
        	'name' => 'Demo',
        	'email' => 'demo@app.com',
        	'password' => bcrypt('password'),
        ]);
    }
}
