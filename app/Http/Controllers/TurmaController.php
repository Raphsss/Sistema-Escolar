<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|min:3|max:100',
            'codigo' => 'required|min:3|max:15|unique:turmas,codigo'
        ]);

        $turma = new Turma();
        $turma->nome = $validated['nome'];
        $turma->codigo = $validated['codigo'];

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
        $alunos = $turma->alunos();

        return view('turmas.show', [
            'turma' => $turma,
            'alunos' => $alunos,
        ]);
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
    public function update(Request $request, string $id)
    {
        $turma = Turma::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required|min:3|max:100',
            'codigo' => 'required|min:3|max:15|unique:turmas,codigo,' . $id,
        ]);

        $turma->nome = $validated['nome'];
        $turma->codigo = $validated['codigo'];

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
