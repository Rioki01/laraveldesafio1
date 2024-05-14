<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('site.login');
    }

    public function customLogin(Request $request)   //checa e valida login, senha e email.
    {
        $validator =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('app.fornecedores') //caso ocorra login, permitir visualização de novas paginas.
                        ->withSuccess('Login com sucesso'); 
        }
        // Falha na autenticação, redirecionar de volta para a página de login
        $validator['emailPassword'] = 'Email ou Senha incorretos, tente novamente.';
        return redirect("login")->withErrors($validator);
    }



    public function cadastro()
    {
        return view('site.cadastro');
    }

    public function customCadastro(Request $request)    //checa e valida o registro
    {  
        try {
                $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:3',
            ]);
                
            $data = $request->all();
            $check = $this->create($data);
                
            return redirect("app.fornecedores")->withSuccess('Voce realizou seu login.');
        } catch (\Exception $e) {
            // Registre a exceção ou retorne para a página de cadastro com uma mensagem de erro
            return redirect()->back()->withErrors(['error' => 'Erro ao criar cadastro, tente novamente!']);
        }
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function dashboard() //leva o usuario para '/', ou não permite login sem autenticação
    {
        if(Auth::check()){
            return view('app.fornecedores');
        }
  
        return redirect("site.principal")->withSuccess('Voce não possui permissões para acesso.');
    }

    public function signOut() { //logoff
        Session::flush();
        Auth::logout();
  
        return Redirect('site.principal');
    }
}
