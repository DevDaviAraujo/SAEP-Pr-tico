<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;      
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Hash;
use Illuminate\Validation\Rule;
use Session;
use App\Models\Professores;
use App\Models\Turmas;
use App\Models\Atividades;

class WebsiteController extends Controller {

    public function home() {

        $turmas = Turmas::where('idProfessores',Auth::user()->id)->get();

        return view('website.home',compact('turmas'));
    }

    public function visualizar($id) {

        $turma = Turmas::where('id',$id)->first();
        $atividades = Atividades::where('idTurmas',$id)->get();

        return view('website.visualizar',compact('atividades','turma'));
    }
    public function turmas() {
        return view('website.turmas');
    }
    public function atividades() {

        $turmas = Turmas::where('idProfessores',Auth::user()->id)->get();

        return view('website.atividades',compact('turmas'));
    }
    public function login() {
        return view('website.login');
    }
    public function cadastro() {
        return view('website.cadastro');
    }

    public function logar(Request $request) {

        $crendenciais = $request->validate([
         'email' => ['required', 'email'],
         'password' => ['required'],
     ]);

     if (Auth::attempt($crendenciais)) {
         $request->session()->regenerate();

         return redirect()->intended('/');
     }

     
     return redirect()->back();

    }

    public function deslogar(Request $request) {

        if(Auth::guard('web')->check()) {
            
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        }
    
        return redirect('/login');
    }
    public function cadastrarTurma(Request $request) {

        $turma = new Turmas();
        $turma->nome = $request->nome;
        $turma->idProfessores = Auth::user()->id;
        $turma->save();

        return redirect()->back();

    }

    public function excluirTurma($id) {

        $turma = Turmas::where('id',$id)->first();
        $atividades = Atividades::where('idTurmas',$id)->delete();
        $turma->delete();

        return redirect()->back();

    }
    public function cadastrarProfessor(Request $request) {

        $professor = new Professores();
        $professor->email = $request->email;
        $professor->password = Hash::make($request->password);
        $professor->save();

        return redirect('/login');

    }

    public function cadastrarAtividade(Request $request) {

        $atividade = new Atividades();
        $atividade->nome = $request->nome;
        $atividade->descricao = $request->descricao;
        $atividade->idTurmas = $request->idTurmas;
        $atividade->save();

        return redirect()->back();

    }


}