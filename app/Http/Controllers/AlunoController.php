<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Exception;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /*d
     * Display a listing of the resource.
     */
    public function index()
    {
        $aluno = new Aluno();
        $alunos = $aluno->all();

        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|min:3|max:255',
            'ra' => 'required|min:3|max:8',
            'email' => 'required|email|unique:alunos,email',
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'telefone' => 'required|min:10|max:15',
        ]);

        $aluno = new Aluno();

        $aluno->nome = $validated['nome'];
        $aluno->ra = $validated['ra'];
        $aluno->email = $validated['email'];
        $aluno->data_nascimento = $validated['data_nascimento'];
        $aluno->sexo = $validated['sexo'];
        $aluno->telefone = $validated['telefone'];

        try {
            $aluno->save();
        } catch (Exception $e) {
            throw new Exception('Não foi possivel cadastrar o aluno ' . $e->getMessage());
        }

        return redirect()->route('alunos.index');
    }
    /**s
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aluno = Aluno::find($id);

        return view('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);

        return view('alunos.edit')->with('aluno', $aluno);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $aluno = Aluno::find($id);
        
        $validated = $request->validate([
            'nome' => 'required|min:3|max:255',
            'ra' => 'required|min:3|max:8',
            'email' => 'required|email|unique:alunos,email,' . $id,
            'data_nascimento' => 'required|date',
            'sexo' => 'required',
            'telefone' => 'required|min:10|max:15',
        ]);
        
        $aluno->nome = $validated['nome'];
        $aluno->ra = $validated['ra'];
        $aluno->email = $validated['email'];
        $aluno->data_nascimento = $validated['data_nascimento'];
        $aluno->sexo = $validated['sexo'];
        $aluno->telefone = $validated['telefone'];


        try {
            $aluno->save();
        } catch (Exception $e) {
            throw new Exception('Não foi possivel atualizar o aluno' . $e->getMessage());
        }

        return redirect()->route('alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);

        try {
            $aluno->delete();
        } catch (Exception $e) {
            throw new Exception('Falha ao excluir aluno: ' . $e->getMessage());
        }

        return redirect()->route('alunos.index');
    }
}
