<?php

namespace Database\Seeders;

use App\Models\Commande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class CommadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['numCom' => 100, 'dateCom' =>  Date("2022-11-03"), 'id_Client' => 1],
            ['numCom' => 200, 'dateCom' =>  Date("2022-12-03"), 'id_Client' => 2],
        ];
        Commande::insert($data);
    }
}
