<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('login.login');
    }
    public function entrar(Request $req)
    {
      $dados = $req->all();
      if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
        return redirect()->route('admin.home');
      }

      return redirect()->route('login');
    }
    public function sair()
    {
      Auth::logout();
      return redirect()->route('site.home');
    }
}
