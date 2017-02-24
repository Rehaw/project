<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesSeedes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
		'name'=>'Продовольственные товары',
		'showhide'=>'show'
		]);
		
		Categorie::create([
		'name'=>'Бытовая техника',
		'showhide'=>'show'
		]);
		
		Categorie::create([
		'name'=>'Автомобили',
		'showhide'=>'show'
		]);
		
		Categorie::create([
		'name'=>'Специализированная техника',
		'showhide'=>'show'
		]);
		
		Categorie::create([
		'name'=>'Сантехника',
		'showhide'=>'show'
		]);
    }
}
