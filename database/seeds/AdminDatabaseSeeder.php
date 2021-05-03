<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;


class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([

            'name' => 'bassant mostafa',
            'email' => 'bassantmostafa11@yahoo.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
