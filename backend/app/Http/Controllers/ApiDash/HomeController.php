<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {   
        $professores = [
            [
                'id' => 1,
                'name' => 'Renato Luciano Cagnin',
                'email' => 'renato@fho.edu.br',
                'website' => 'www.cagnin.com.br'
            ],
            [
                'id' => 2,
                'name' => 'Maurício Acconcia Dias',
                'email' => 'macdias@fho.edu.br',
                'website' => 'www.macdias.com.br'
            ]
        ];

        $conteudistas = [
            [
                'id' => 1,
                'name' => 'Daniel Ferreira',
                'email' => 'daniel.ferreira@fho.edu.br',
                'website' => 'Sistemas de Controle'
            ],
            [
                'id' => 2,
                'name' => 'William Douglas Paes Coelho',
                'email' => 'william@fho.edu.br',
                'website' => 'Mecânica dos Sólidos'
            ],
            [
                'id' => 3,
                'name' => 'Marcus Vinicius Ataide',
                'email' => 'marcus@fho.edu.br',
                'website' => 'Eletrônica'
            ]
        ];

        return response()->json([
            'professores' => $professores,
            'conteudistas' => $conteudistas,
        ]);
    }
}
