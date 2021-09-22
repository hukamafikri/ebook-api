<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119088',
            'Hukama Fikri',
            'Laki-laki',
            '+62 813-4732-4038',
            'XII RPL 3'
        ]);
    }
}
