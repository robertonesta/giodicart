<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=>'Didattica'],
            ['name'=>'Giocattoli'],
            ['name'=>'Prima Infanzia'],
            ['name'=>'Libri'],
            ['name'=>'Scuola e Ufficio'],
            ['name'=>'Casa e Giardino'],
            ['name'=>'Biciclette'],
            ['name'=>'Auto Elettriche'],
            ['name'=>'Fitness'],
            ['name'=>'Tempo Libero e Sport'],
        ];

        foreach($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category['name'];
            $newCategory->slug = Str::slug($category['name']);
            $newCategory->save();
        }
    }
}
