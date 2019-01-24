<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    public function login(Request $request){

    	$dados = $request->all();

    	if(Auth::attempt(['email'=> $dados['email'], 'password'=> $dados['password']])){
    		return redirect()->route('admin.site.home');
    	}
    }
}
