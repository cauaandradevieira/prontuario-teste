<?php

namespace App\Http\Controllers\perfil;

use App\Http\Controllers\Controller;
use App\Http\Requests\perfil\PerfilRequest;
use Illuminate\Http\Request;
use App\Models\usuario\Perfil;
use Illuminate\Auth\Events\Validated;
use App\Exceptions\Perfil\PerfilNaoEncontradoException;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfis = Perfil::paginate(10);
        return view('perfil.perfis', compact('perfis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perfil.criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PerfilRequest $request)
    {
        $request = $request->validated();
        Perfil::create($request);
        return redirect()->route('perfil.index')->with('success', 'usuario criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfil $perfil)
    {
        return view('perfil.perfil', compact('perfil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $perfil = Perfil::find($id);

        if (!$perfil) {
            throw new PerfilNaoEncontradoException($id);
        }

        return view('perfil.editar', compact('perfil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PerfilRequest $request, $id)
    {
        $perfil = Perfil::find($id);
        if (!$perfil) {
            throw new \App\Exceptions\Perfil\PerfilNaoEncontradoException($id);
        }

        $perfil->update($request->validated());
        return redirect()->route('perfil.index')->with('message', 'Usuário atualizado com sucesso !!');
    }

    /**
     * Remove the specified resource from storage. return view('perfil.editar', compact('id'));
     */
    public function destroy(Perfil $perfil)
    {
        $foiDeletado = $perfil->delete();
        if (!$foiDeletado) {
            return redirect()->route('perfil.index')->with('message', 'Não foi possível deletar esse perfil');
        }
        return redirect()->route('perfil.index')->with('message', 'Usuário deletado com sucesso !!');
    }
}
