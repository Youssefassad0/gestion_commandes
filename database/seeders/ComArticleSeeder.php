<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['quantite' => 2, 'commande_id' =>  1, 'article_id' => 1],
            ['quantite' => 3, 'commande_id' => 2, 'article_id' => 2],
        ];
        DB::table('commande-article')->insert($data);
    }
}
