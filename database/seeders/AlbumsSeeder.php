<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*DB::table('albums')->insert([
            'albumName' => 'Dark Sun',
            'artistName' => 'Dayseeker',
            'year' => '2022',
            'genre' => 'Rock',
            'coverImg' => ''
        ]);*/
        
        \App\Models\Albums::factory(5)->create();
    }
}
