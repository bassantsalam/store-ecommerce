<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminDatabaseSeeder::class);
        $this->call(CategoryDatabaseSeeder::class);
        
 
    }
    
       
}
