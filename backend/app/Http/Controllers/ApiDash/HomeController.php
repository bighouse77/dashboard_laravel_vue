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

    public function insertData(Request $request): array
    {
        // C R E A T E
        $content = $request->getContent();

        $teste = Professor::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->information
        ]);

        return [
            'msg' => 'professor deletado',
            'status' => 200,
        ];
    }

    public function deleteData($id): array
    {
        // D E L E T E
        $data = Professor::find($id);
        $data->delete();

        return [
            'msg' => 'professor deletado',
            'status' => 200,
            'content' => $data
        ];
    }

    public function putData($id, Request $request): array
    {
        // U P D A T E
        $att = Professor::where('id',$id)->update(
          [
              'name' => $request->name,
              'email' => $request->email,
              'website' => $request->information
          ]
        );

        return [
            'status' => 200,
            'content' => $request,
            'id' => $att
        ];
    }
}
