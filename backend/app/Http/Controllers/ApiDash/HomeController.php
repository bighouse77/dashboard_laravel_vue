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

        //dd($request);

        $content = $request->getContent();

        $teste = Professor::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->information
        ]);

        /*
        $professor = new Professor;

        professor::create([$request->all()]);
        */

        /*
        $professor = new Professor;

        if (!empty($request->name)) {
            $professor->name = $request->name;
        }
        if (!empty($request->email)) {
            $professor->email = $request->email;
        }
        if (!empty($request->information)) {
            $professor->website = $request->information;
        }

        $professor->save();
        */

        // CREATE
        /*
        $teste = Professor::create([
            'name' => 'cleber Create',
            'email' => 'teste2',
            'website' => 'te2.com.br'
        ]);
    */


        // DELETE
        /*
        $teste = Professor::where('email', '=', 'teste')->delete();
        */

        // UPDATE
        /*
        $teste = Professor::find(19);
        $teste->name = 'Teste alterado';
        $teste->email = 'email alterado';
        $teste->website = 'alterado';
        $teste->save();
        */
    }
}
