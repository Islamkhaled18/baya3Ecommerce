<?php

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::create([
           'store_name' => 'الخولي',
           'store_type'=> 'ملابس',
            'store_phone'=> '0123456789',
           'store_governorate'=> 'الدقهليه',
           'store_city'=> 'المنصوره',
           'store_address'=> 'شارع الترعه',
           'store_email'=> 'k@gmail.com',
           'store_description'=> 'الخولي الخولي للملابس',
            'shipping_price'=> '10 EGP',
           'shipping_period'=> ' 2 Days',
           'store_logo_image'=> asset('Uploads/stores/1.png'),
           'store_cover_image'=> asset('Uploads/stores/2.jpg'),
            'user_id'=> '1',
            'profile_id'=> '1',

        ]);
    }
}
