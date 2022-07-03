<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowPdfController extends Controller
{
    public function showPdf()
    {
        $pathToFile = public_path(). "/Iris_Maenhout_cv.pdf";
        $headers = ['Content-Type: application/pdf'];

        return response()->file($pathToFile);

        return response()->file($pathToFile, $headers);
    }


    public function downloadPdf(Request $request)
    {
        $pathToFile = public_path(). "/Iris_Maenhout_cv.pdf";

        $filename = "Iris_Maenhout_cv.pdf";

        $headers = ['Content-Type: application/pdf'];

        if (file_exists($pathToFile)) {
            return response()->download($pathToFile, $filename, $headers);
        } else {
            echo('File not found.');
        }
    }
}
