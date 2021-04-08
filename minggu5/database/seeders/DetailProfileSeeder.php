<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'address' => 'Bondowoso',
            'nomor_tlp' => '08xxxxxxx',
            'ttl' => '2000-11-01',
            'foto' => 'picture.jpg',
        ]);
    }
}
