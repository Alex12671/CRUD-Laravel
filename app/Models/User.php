<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table= 'users';

    public $incrementing = false;


    protected $fillable = [
        'dni',
        'name',
        'surname',
    ];

    public function validationRules(){
        return [
            'name'                  => 'required',
            'dni'                   => 'required',
            'surname'               => 'required',
        ];
    }
}
