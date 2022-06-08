<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Disciplina;

class ApiController extends Controller
{
    /**
     * --------------------------------
     * PESSOAS
     * --------------------------------
     */

    //retorna todas as pessoas
    public function getPessoas()
    {
    }

    //retorna a pessoa do ID    
    public function getPessoa($id)
    {
    }

    //cria uma pessoa no banco de dados
    public function createPessoa(Request $request)
    {
        $novaPessoa = new Pessoa;
        $novaPessoa->id = $request->id;
        $novaPessoa->nome = $request->nome;
        $novaPessoa->email = $request->email;
        $novaPessoa->save();

        return response()->json([
            "message" => "Pessoa criada com sucesso!"
        ], 201);
    }

    //atualiza os dados de uma pessoa
    public function updatePessoa(Request $request, $id)
    {
    }

    //apaga a pessoa do banco de dados
    public function deletePessoa($id)
    {
    }

    /**
     * -------------------------------------
     * DISCIPLINAS
     * -------------------------------------
     */

    //retorna todas as disciplinas
    public function getDisciplinas()
    {
    }

    //retorna a disciplina do ID    
    public function getDisciplina($id)
    {
    }

    //cria uma disciplina no banco de dados
    public function createDisciplina(Request $request)
    {
        $novaDisciplina = new Disciplina;
        $novaDisciplina->nome = $request->nome;
        $novaDisciplina->descricao = $request->descricao;
        $novaDisciplina->save();

        return response()->json([
            "message" => "Disciplina criada com sucesso!"
        ], 201);
    }

    //atualiza os dados de uma disciplina
    public function updateDisciplina(Request $request, $id)
    {
    }

    //apaga a disciplina do banco de dados
    public function deleteDisciplina($id)
    {
    }
}
