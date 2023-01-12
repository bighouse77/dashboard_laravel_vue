<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Professor;
use App\Models\Models\Conteudista;
use Illuminate\Http\Request;
use DB;


class HomeController extends Controller
{
    public function index() 
    {   
        $professores = Professor::all();
        
        $conteudistas = Conteudista::all();

        return response()->json([
            'professores' => $professores,
            'conteudistas' => $conteudistas,
        ]);
    }

    public function insertData(Request $request)
    {
        $data = $request->all();
        console.log($data);
        return response()->json($data);
    }
}
