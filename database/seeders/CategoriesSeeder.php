<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            'name' => 'Спорт',
            'name' => 'Наука',
            'name' => 'Финансы',
            'name' => 'Политика',
            'name' => 'Разное',
        ];

        DB::table('categories')->insert($category);
    }
}
