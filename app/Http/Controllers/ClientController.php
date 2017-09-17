<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Exibir todos clientes cadastrados
    public function index()
    {
        //o nome index abaixo refere-se ao nome da view tirando a parte .blade.php
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Tela de formulário de cadastro
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //ACtion pra salvar cliente
    public function store(Request $request)
    {
        //array de dados que vem do post
        $dados = $request->all();
        //instalciar model
        Client::create($dados);
        return back()->with(['sucess' => 'Cliente cadastrado com sucessl!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //exibir apenas um dado do cliente
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
    //tela para vizualizar formulário de edição para poder atualizar os dados
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
    //atualizar dados do cliente
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
    //deletar cliente o cliente ou qual quer dado do banco
    public function destroy($id)
    {
        //
    }
}
