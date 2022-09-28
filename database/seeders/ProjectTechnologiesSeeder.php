<?php

namespace Database\Seeders;

use App\Models\project_technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $project_technologies = [

            // _________________ Samen uit, samen thuis ______________________
            [
                'technology_id' => 3,
                'project_id' => 1
            ],

            [
                'technology_id' => 2,
                'project_id' => 1
            ],

            [
                'technology_id' => 7,
                'project_id' => 1
            ],
            [
                'technology_id' => 11,
                'project_id' => 1
            ],

            // __________________________________ Babylist ____________________________

            [
                'technology_id' => 5,
                'project_id' => 2
            ],

            [
                'technology_id' => 10,
                'project_id' => 2
            ],

            [
                'technology_id' => 3,
                'project_id' => 2
            ],

            [
                'technology_id' => 8,
                'project_id' => 2
            ],

            [
                'technology_id' => 12,
                'project_id' => 2
            ],

            // _______________________ Art webshop _____________________________

            [
                'technology_id' => 14,
                'project_id' => 3
            ],
            [
                'technology_id' => 15,
                'project_id' => 3
            ],

            // ______________________ Portfolio ________________________
            [
                'technology_id' => 1,
                'project_id' => 4
            ],
            [
                'technology_id' => 2,
                'project_id' => 4
            ],
            [
                'technology_id' => 3,
                'project_id' => 4
            ],
            [
                'technology_id' => 4,
                'project_id' => 4
            ],
            [
                'technology_id' => 5,
                'project_id' => 4
            ],
            [
                'technology_id' => 8,
                'project_id' => 4
            ],
            [
                'technology_id' => 14,
                'project_id' => 4
            ],
            [
                'technology_id' => 15,
                'project_id' => 4
            ],
            [
                'technology_id' => 8,
                'project_id' => 4
            ],

            // _____________________ Kiosk __________________________

            [
                'technology_id' => 14,
                'project_id' => 5
            ],


        ];


        foreach($project_technologies as $project_tech){
            project_technology::create($project_tech);
        }
    }
}
