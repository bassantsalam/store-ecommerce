<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;
class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_locale' => 'ar',
            'default_timezone' => 'asia/cairo',
            'reviews' => true,
            'auto_approve_reviews' => true,
            'suppordted_currence' => ['USD', 'LE', 'SAR'],
            'defulte_currence' => ['USD'],
            'search_engine' => 'mysql',
            'local_shipping_cost' => 0,
            'outer_shipping_cost' => 0,
            'free_shipping_cost' => 0,
            'translatable' => [

                
                'store_name' => 'bassant store',
                'free_shipping_label' => 'free sgipping',
                'local_label' => 'local sgipping',
                'outer_label' => 'outer sgipping',
            ],
        ]);
    }
    
}
