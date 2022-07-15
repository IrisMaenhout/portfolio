<?php

namespace Database\Seeders;

use App\Models\technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = [
            [
                'name' => 'HTML',
            ],

            [
                'name' => 'CSS',
            ],

            [
                'name' => 'Javascript',
            ],

            [
                'name' => 'PHP',
            ],

            [
                'name' => 'Laravel',
            ],

            [
                'name' => 'Python',
            ],

            [
                'name' => 'Firebase',
            ],

            [
                'name' => 'SQL',
            ],

            [
                'name' =>  'Sass'
            ],

            [
                'name' => 'Tailwind css'
            ],

            [
                'name' => 'Mapbox'
            ],

            [
                'name' => 'Mollie'
            ],

            [
                'name' => 'React'
            ],
        ];

        foreach($technologies as $technology){
            technology::create($technology);
        }
    }
}
