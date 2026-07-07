<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
        public $categories = [
            'Elettronica',
            'Videogames',
            'Arte',
            'Cultura',
            'Animali domestici',
            'Riviste',
            'Sport',
            'Accessori',
            'Motori',
            'Tecnologia'
        ]; /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach($this->categories as $category){
            Category::create([
                'name'=>$category
            ]);
        }
    }
}
