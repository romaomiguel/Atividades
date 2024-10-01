<?php

namespace App\Http\Controllers;

use App\Models\alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function create()
    {
        return view('alunos.create'); // Retorna a view do formulário
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255', // Validação para sobrenome
            'email' => 'required|email|unique:alunos,email',
            'data_nascimento' => 'required|date',
        ]);

        // Cria o aluno
        alunos::create($request->all());

        // Redireciona após o sucesso
        return redirect()->route('alunos.index')->with('success', 'Aluno cadastrado com sucesso!');
    }

    public function index()
    {
        $alunos = alunos::all();
        return view('alunos.index', compact('alunos'));
    }
}
