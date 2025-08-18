<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Exception;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
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
        $aluno = new Aluno();

        $aluno->nome = $request->input('nome');
        $aluno->ra = $request->input('ra');
        $aluno->curso = $request->input('curso');

        try {
            $aluno->save();
        } catch (Exception $e) {
            throw new Exception('Não foi possivel cadastrar o aluno');
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

        $aluno->nome = $request->input('nome');
        $aluno->ra = $request->input('ra');
        $aluno->curso = $request->input('curso');

        try {
            $aluno->save();
        } catch (Exception $e) {
            throw new Exception('Não foi possivel atualizar o aluno');
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
        } catch (Exception) {
            throw new Exception('Falha ao excluir aluno.');
        }

        return redirect()->route('alunos.index');
    }
}
