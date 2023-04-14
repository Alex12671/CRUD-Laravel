<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    protected $table= 'pets';

    protected $fillable = [
        'username',
        'password',
        'name',
        'breed',
        'gender',
        'color',
        'edat',
        'ownerName',
        'phoneNumber',
        'picture',
    ];

    public function validationRules(){
        return [
            'username'               => 'required',
            'password'        => 'required',
            'name'              => 'required',
            'breed'          => 'required',
            'gender' => 'required',
            'color'                 => 'required',
            'edat'         => 'required',
            'ownerName'        => 'required',
            'phoneNumber'              => 'required',
            'picture'   => 'required',
        ];
    }
}
