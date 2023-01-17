<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Professor extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    public $name;
    /**
     * @var mixed
     */
    public $email;
    /**
     * @var mixed
     */
    public $website;
    protected $fillable = [
        'name',
        'email',
        'website'
    ];

    public static function create(array $array): \Illuminate\Http\JsonResponse
    {
        return response()->json($array);
    }

}
