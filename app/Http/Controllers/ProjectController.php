<?php

namespace App\Http\Controllers;

use App\Models\end_result_picture;
use App\Models\process_picture;
use App\Models\project;
use App\Models\project_technology;
use App\Models\technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function projectInfo($project_name)
    {

        $name = str_replace("_"," ", ucfirst($project_name));
        // dd($name);

        $project = project::where('name', '=', $name)->get();
        $result_images = end_result_picture::where('project_id', '=', $project[0]->id)->get();
        $process_images = process_picture::where('project_id', '=', $project[0]->id)->get();

        $technologies_id = project_technology::where('project_id', '=', $project[0]->id)->get();

        $technologies = [];

        foreach ($technologies_id as $tech_id){
            $technology = technology::where('id', '=', $tech_id->technology_id)->get();
            array_push($technologies, $technology);
        }

        // $str_lowecase = str_replace(" ","_", strtolower($project[0]->name));
        // $img_result = 'images/result/' . $str_lowecase . '/' . $str_lowecase . '_1.jpg';


        return view('project', [
            "project" => $project[0],
            "result_images" => $result_images,
            "process_images" => $process_images,
            "technologies" => $technologies,
            // "img_result" => $img_result,
        ]);
    }
}
