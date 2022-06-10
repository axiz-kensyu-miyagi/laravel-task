<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $request->validate([
            'login_id' => 'required',
            'password' => 'required'
        ]);
        
        //$id = $request->login_id;
        //$pass = $request->pass;

            $login =  User::where('login_id', '=', $request->login_id, 'and','password', '=', $request->pass)->exists();
            
            if($login == 1){
                return view('calendar');
            }else{
                return view('index');
            }
    
    
    }
}
