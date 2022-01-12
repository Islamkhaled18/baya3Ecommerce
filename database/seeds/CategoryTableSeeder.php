<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([

            'category_name'=>[
                'ar'=>'رجالى',
                'en'=>'Men',
            ],
            'slug'=>[
                'ar'=>'رجالى',
                'en'=>'Men',
            ],
            'category_photo' => asset('uploads/categories/men.jpg'),
        ]);
    }
}
