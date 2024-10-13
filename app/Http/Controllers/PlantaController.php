<?php

namespace App\Http\Controllers;

use App\Models\Planta;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    //lista todas as plantas
    public function index()
    {
        $plantas = Planta::all();

        //dd($plantas);
    
        return view('plantas.index', compact('plantas'));
    }

    // Exibir o formulário de criação de uma nova planta
    public function create()
    {
        return view('plantas.create');
    }

    // Armazenar uma nova planta
    public function store(Request $request)
    {
        $request->validate([
            'nome_cientifico' => 'required|unique:plantas,nome_cientifico|max:255',
            'nome_comum' => 'required|max:100',
            'bioma' => 'required',
            'descricao' => 'nullable|max:500',
        ], [
            'nome_cientifico.required' => 'O nome científico é obrigatório.',
            'nome_cientifico.unique' => 'Já existe uma planta com esse nome científico.',
            'nome_comum.required' => 'O nome comum é obrigatório.',
            'bioma.required' => 'O bioma é obrigatório.',
        ]);

        Planta::create($request->all());
        return redirect()->route('plantas.index');
    }

    // Exibir os detalhes de uma planta
    public function show($id)
    {
        $planta = Planta::find($id);
        if(!$planta){
            return redirect()->route('plantas.index');
        }
            
        return view('plantas.show', compact('planta'));
    }

    // Exibir o formulário de edição de uma planta
    public function edit($id)
    {
        $planta = Planta::find($id);
        if(!$planta){
            return redirect()->route('plantas.index');
        }

        return view('plantas.edit', compact('planta'));
    }

    // Atualizar uma planta existente
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome_cientifico' => 'required|string|max:255',
            'nome_comum' => 'required|string|max:255',
            'bioma' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ], [
            'nome_cientifico.required' => 'O nome científico é obrigatório.',
            'nome_comum.required' => 'O nome comum é obrigatório.',
            'bioma.required' => 'O bioma é obrigatório.',
        ]);
    
        $planta = Planta::findOrFail($id);
        $planta->update($validated);
    
        return redirect()->route('plantas.index')->with('success', 'Planta atualizada com sucesso!');
    }

    // Excluir uma planta
    public function destroy($id)
    {
        $planta = Planta::find($id);
        if(!$planta){
            return redirect()->route('plantas.index');
        }

        $planta->delete();
        return redirect()->route('plantas.index');
    }
}
