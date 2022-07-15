<?php

namespace Database\Seeders;

use App\Models\end_result_picture;
use App\Models\process_picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $end_result = [

            // ________________________ Samen uit, samen thuis _______________________

            [
                'project_id' => 1,
                'img_path' => 'images/result/samen_uit_samen_thuis/samen_uit_samen_thuis_1.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/result/samen_uit_samen_thuis/samen_uit_samen_thuis_3.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/result/samen_uit_samen_thuis/samen_uit_samen_thuis_4.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/result/samen_uit_samen_thuis/samen_uit_samen_thuis_5.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/result/samen_uit_samen_thuis/samen_uit_samen_thuis_6.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/result/samen_uit_samen_thuis/samen_uit_samen_thuis_7.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/result/samen_uit_samen_thuis/samen_uit_samen_thuis_8.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'screencasts/samen_uit_samen_thuis/samen_uit_samen_thuis_1.mp4',
            ],

            [
                'project_id' => 1,
                'img_path' => 'screencasts/samen_uit_samen_thuis/samen_uit_samen_thuis_2.mp4',
            ],

            // ___________________ Babylist _______________________________
            [
                'project_id' => 2,
                'img_path' => 'images/result/babylist/babylist_1.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'images/result/babylist/babylist_2.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'images/result/babylist/babylist_3.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'images/result/babylist/babylist_4.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'images/result/babylist/babylist_5.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'images/result/babylist/babylist_6.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'images/result/babylist/babylist_7.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'screencasts/babylist/babylist_1.mp4',
            ],

            [
                'project_id' => 2,
                'img_path' => 'screencasts/babylist/babylist_2.mp4',
            ],


        ];


        $process = [

            // ____________________________ Samen uit samen thuis __________________
            [
                'project_id' => 1,
                'img_path' => 'images/process/samen_uit_samen_thuis/samen_uit_samen_thuis_1.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/process/samen_uit_samen_thuis/samen_uit_samen_thuis_2.jpg',
            ],

            [
                'project_id' => 1,
                'img_path' => 'images/process/samen_uit_samen_thuis/samen_uit_samen_thuis_3.jpg',
            ],


            // ________________________ Babylist ___________________________
            [
                'project_id' => 2,
                'img_path' => 'images/process/babylist/babylist_1.jpg',
            ],

            [
                'project_id' => 2,
                'img_path' => 'images/process/babylist/babylist_2.jpg',
            ],

        ];

        foreach($end_result as $pics){
            end_result_picture::create($pics);
        }

        foreach($process as $pics){
            process_picture::create($pics);
        }



    }
}
