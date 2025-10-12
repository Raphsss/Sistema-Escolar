<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUserRequest;
use App\Http\Requests\updateUserRequest;
use App\Models\Aluno;
use App\Models\Turma;
use Exception;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /*%
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = Aluno::orderBy('nome', 'asc')->get();

        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $turmas = Turma::all();

        return view('alunos.create')->with('turmas', $turmas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeUserRequest $request)
    {
        $aluno = new Aluno();

        $aluno->fill($request->validated());
        $aluno->turma_id = $request['turma'];

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
        $aluno = Aluno::with('turma')->findOrFail($id);

        return view('alunos.show')->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        $turmas = Turma::all();

        return view('alunos.edit', [
            'aluno' => $aluno,
            'turmas' => $turmas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateUserRequest $request, string $id)
    {
        $aluno = Aluno::find($id);
        
        $aluno->fill($request->validated());

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
        $aluno = Aluno::findOrFail($id);

        try {
            $aluno->delete();
        } catch (Exception $e) {
            throw new Exception('Falha ao excluir aluno: ' . $e->getMessage());
        }

        return redirect()->route('alunos.index');
    }
}
