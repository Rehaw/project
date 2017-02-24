<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create ([
		'name'=>'Пылесос',
		'body'=>'Описание пылесоса',
		'picture'=>'-',
		'user_id'=>1,
		'product_key'=>'Rovetu1234',
		'count'=>1,
		'url'=>'-',
		'categorie_id'=>1
		]);
		
		Product::create ([
		'name'=>'Мазда',
		'body'=>'Описание мазды',
		'picture'=>'-',
		'user_id'=>2,
		'product_key'=>'Mazda1',
		'count'=>5,
		'url'=>'-',
		'categorie_id'=>2
		]);
		
		Product::create ([
		'name'=>'Раковина',
		'body'=>'Описание раковины',
		'picture'=>'-',
		'user_id'=>3,
		'product_key'=>'Rak5',
		'count'=>10,
		'url'=>'-',
		'categorie_id'=>3
		]);
    }
}
