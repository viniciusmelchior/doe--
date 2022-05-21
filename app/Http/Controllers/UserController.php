<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Endereco;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('funcionando');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //dados do usuario 
        $usuario = User::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password,
            'nome_social' => $request->nome_social,
            'nome_social_ativo' => $request->nome_social_ativo,
            'numero_telefone' => $request->numero_telefone,
            'numero_whatsapp' => $request->numero_whatsapp,
            'aniversario' => $request->aniversario,
            'cpf' => $request->cpf,
            'sexo_biologico' => $request->sexo_biologico,
            'genero' => $request->genero,
            'ultima_doacao' => $request->ultima_doacao,
            'xp' => 0,
            'url_imagem' => $request->url_imagem,
        ]);

        $usuario->save();

        $endereco = Endereco::create([
            'user_id' => $usuario->id,
            'cep' => $request->cep,
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
        ]);

        $endereco->save();
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
        $usuario = User::find($id);
        $endereco = Endereco::where('user_id', $id);

        $endereco->delete();
        $usuario->delete();
    }
}
