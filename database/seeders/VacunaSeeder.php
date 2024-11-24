<?php

namespace Database\Seeders;

use App\Models\Vacuna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vacunas')->insert([
            ['vacunas' => 'Moquillo'],
            ['vacunas' => 'Rabia'],
            ['vacunas' => 'Influenza'],
            ['vacunas' => 'Bordetella'],
            ['vacunas' => 'Vibriosis'],
        ]);
    }
}
