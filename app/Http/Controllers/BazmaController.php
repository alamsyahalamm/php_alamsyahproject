<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("ini adalah bentuk rspon");
    }
    public function responseHeader(){
        $bodyResponse = [
            'name' => 'alam',
            'school' => 'smk ti bazma'
        ];
        return response (json_encode($bodyResponse),200)
        ->header('Content-Type', 'Application/Json')
        ->withHeaders([
            'app' => 'Alamsyah',
            'calsses' => "XI",
            'web' => 'laravel'
        ]);
    }

}
