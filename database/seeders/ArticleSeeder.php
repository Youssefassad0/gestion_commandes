<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['numero' => 11, 'designation' => 'clair shompoing', 'price' => 14.05],
            ['numero' => 22, 'designation' => 'dove sabon', 'price' => 9.05],
            ['numero' => 33, 'designation' => 'tide oni ', 'price' => 10],
        ];
        Article::insert($data);
    }
}
