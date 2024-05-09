<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nom" => "webTech", "activite" => "software", "adresse" => 'soualem', 'contact' => '082028282'],
            ["nom" => "AchoTex", "activite" => "entrepreneur", "adresse" => 'casa', 'contact' => '05827292'],
            ["nom" => "Appdevs", "activite" => "chaudrenei", "adresse" => 'rabat', 'contact' => '0723928912'],
        ];
        Client::insert($data);
    }
}
