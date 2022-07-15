<?php

namespace App\Http\Controllers;

use App\Models\end_result_picture;
use App\Models\project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showAllProjects()
    {
        $projects = project::where('visible', '=', 1)->get();
        // $projects_main_img = end_result_picture::where('main_img', '=', 1)->get();

        return view('home', [
            "projects" => $projects,
            // "projects_main_img" => $projects_main_img,
        ]);
    }
}
