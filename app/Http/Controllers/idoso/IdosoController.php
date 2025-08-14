<?php

namespace App\Http\Controllers\idoso;

use App\Http\Controllers\Controller;
use App\Http\Requests\idoso\IdosoRequest;
use App\Models\idoso\Idoso;

class IdosoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idosos = Idoso::all();
        return view("idoso.idosos",[
            "idosos" => $idosos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('idoso.criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IdosoRequest $request)
    {
        $request->validated();
        Idoso::create($request->all());
        return redirect()->route('idoso.index')->with('success', 'idoso criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $idoso = Idoso::find($id);

        // if($idoso){ return throw IdosoNotFoundException::with('error',''); }
        
        return view('idoso.idoso', compact('idoso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $idoso = Idoso::find($id);

        // if($idoso){ return throw IdosoNotFoundException::with('error',''); }

        return view('idoso.editar', [
            'idoso' => $idoso
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IdosoRequest $request, Idoso $idoso)
    {
        //$request->validated();

        $idoso->update($request->all());

        return redirect()->route('idoso.index')
            ->with('message', 'Idoso atualizado com sucesso !!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $idoso = Idoso::find($id);

        // if($idoso){ return throw IdosoNotFoundException::with('error',''); }

        $foiDeletado = $idoso->delete();

        if(!$foiDeletado)
        {
            return redirect()->route('perfil.index')->with('message','Não foi possível deletar esse perfil');
        }
        return redirect()->route('perfil.index')->with('message', 'Usuário deletado com sucesso !!');
    }
}
