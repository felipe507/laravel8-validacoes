<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $regras = [
        'nome' => 'required|min:5|max:20|unique:clientes', 
        'idade' => 'required|numeric',
        'endereco' => 'required',
        'telefone' => 'required',
        'email' => 'required|email',     
        ];

        $mensagens = [
        'required' => 'O campo :attribute é obrigatório!',
        'nome.min' => 'O campo nome deve ter no mínimo 5 caracteres',
        'nome.max' => 'O campo nome deve ter no máximo 20 caracteres',
        'nome.unique' => 'O nome informado já está cadastrado',
        'idade.numeric' => 'O campo idade deve ser numérico'
        ];

        // $request->validate([
        //     'nome' => 'required|min:5|max:20|unique:clientes',
        //     'idade' => 'required|numeric',
        //     'endereco' => 'required',
        //     'telefone' => 'required',
        //     'email' => 'required|email',
        // ]);

        $request->validate($regras, $mensagens);

        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->idade = $request->idade;
        $cliente->endereco = $request->endereco;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
