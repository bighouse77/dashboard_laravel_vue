<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
