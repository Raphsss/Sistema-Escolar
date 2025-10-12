<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeTurmaRequest;
use App\Http\Requests\updateTurmaRequest;
use App\Models\Turma;
use Exception;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turmas = Turma::all();
        
        return view('turmas.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeTurmaRequest $request)
    {
        $turma = new Turma();
        
        $turma->fill($request->validated());

        try {
            $turma->save();
        } catch (Exception $e) {
            throw new Exception('Falha ao cadastrar turma: ' . $e->getMessage());
        }

        return redirect()->route('turmas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $turma = Turma::with('alunos')->findOrFail($id);

        return view('turmas.show')->with('turma', $turma);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $turma = Turma::findOrFail($id);
        
        return view('turmas.edit')->with('turma', $turma);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateTurmaRequest $request, string $id)
    {
        $turma = Turma::findOrFail($id);

        $turma->fill($request->validated());

        try {
            $turma->save();
        } catch (Exception $e) {
            throw new Exception('Falha ao atualizar turma: ' . $e->getMessage());
        }

        return redirect()->route('turmas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turma = Turma::findOrFail($id);

        try {
            $turma->delete();
        } catch (Exception $e) {
            throw new Exception('Falha ao excluir turma: ' . $e->getMessage());
        }

        return redirect()->route('turmas.index');
    }
}
