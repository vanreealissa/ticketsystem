<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run()
    {
            $concerts = [
                [
                    'title' => 'Harry Styles',
                    'subtitle' => 'Love on Tour',
                    'genre' => 'pop',
                    'date' => now()->addDays(150),
                    'venue' => 'Ziggo dome',
                    'city' => 'Amsterdam'
                ],
                [
                    'title' => 'ABBA World Tour',
                    'subtitle' => 'THE GREATEST HITS',
                    'genre' => 'POP',
                    'date' => now()->addDays(30),
                    'venue' => 'De arena',
                    'city' => 'Amsterdam'
                ],
            ];
    
            foreach ($concerts as $concert) {
                DB::table('concert')->insert($concert);
            }
    }
}

