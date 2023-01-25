<?php

namespace App\Http\Controllers\ApiDash;

use App\Http\Controllers\Controller;
use App\Models\Models\Professor;
use App\Models\Models\Conteudista;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var Professor
     */
    protected $Professor;

    public function __construct(Professor $professor) {
        $this->Professor = $professor;
    }

    public function index(): \Illuminate\Http\JsonResponse
    {
        // READ (Get)
        $professores = Professor::all();

        $conteudistas = Conteudista::all();

        return response()->json([
            'professores' => $professores,
            'conteudistas' => $conteudistas,
        ]);
    }

    public function insertData(Request $request)
    {
        // C R E A T E
        $content = $request->getContent();

        $teste = Professor::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->information
        ]);

        // UPDATE
        /*
        $teste = Professor::find(19);
        $teste->name = 'Teste alterado';
        $teste->email = 'email alterado';
        $teste->website = 'alterado';
        $teste->save();
        */
    }

    public function destroy($del)
    {
        // D E L E T E
        dd($del);
        //$teste = Professor::where('email', '=', $request->email)->delete();

    }
}
