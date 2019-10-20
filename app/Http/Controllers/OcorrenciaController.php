<?php

namespace App\Http\Controllers;

use App\Ocorrencia;
use Illuminate\Http\Request;
use App\Http\Requests\StoreOcorrenciaRequest;
use App\Http\Requests\UpdateOcorrenciaRequest;

class OcorrenciaController extends Controller
{
    
    public function index()
    {
        $ocorrencias = Ocorrencia::all();
        return view('ocorrencia.index', compact('ocorrencias'));
    }


    public function create()
    {
        return view('ocorrencia.create');   
    }


    public function store(StoreOcorrenciaRequest $req)
    {
        
        $ocorrencia = Ocorrencia::create($req->toArray());

        return redirect()->route('ocorrencia.index')->with('success', 'Ocorrência cadastrada com sucesso!');
    }

    
    public function show(Ocorrencia $ocorrencia)
    {
        return view('ocorrrencia.show', compact('ocorrencia'));
    }

    
    public function edit(Ocorrencia $ocorrencia)
    {
        return view('ocorrrencia.edit', compact('ocorrencia'));
    }

    
    public function update(UpdateOcorrenciaRequest $req)
    {
        $ocorrencia = Ocorrencia::update($req->toArray());

        return redirect()->route('ocorrencia.index')->with('success', 'A ocorrencia foi atualizada!');
    }

    
    public function destroy(Ocorrencia $ocorrencia)
    {
        $ocorrencia->delete();

        return redirect()->route('ocorrencia.index')->with('success', 'Ocorrência excluída!');
    }
}
