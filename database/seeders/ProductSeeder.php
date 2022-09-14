<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert([
            [
                'name' => 'Renew License - PHP Laravel reservation building Full CRUD- GPBM',
                'price' => '900000',
                'slug' => 'renew-license-php-laravel-reservation-building-full-crud-gpbm',
                'description' => 'A Building reservation with laravel framework',
                'plan_id' => 'P-0J8442883L745782TMMMYUBI',
                'image' => 'reservation1.jpg'
            ]
        ]);
    }
}
