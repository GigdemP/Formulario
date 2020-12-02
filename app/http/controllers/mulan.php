<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mulan extends Controller
{
    public function verify(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'Hercules' && $pass == 'Mushu'){
            $url = 'msjCor';
        } else {
           $url= 'msjInc';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('inicio');
    }
}
