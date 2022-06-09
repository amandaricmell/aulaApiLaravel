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
        $pessoas = Pessoas::get()->toJson(JSON_PRETTY_PRINT);
        return response($pessoas, 200);
        //todas as pessoas
    }

    //retorna a pessoa do ID    
    public function getPessoa($id)
    {
        //pega uma pessoa apenas

        if (Pessoas::where('id', $id)->exists()) {
            $pessoa = Pessoas::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($pessoa, 200);
        } else {
            return response()->json([
                "message" => "Pessoa não existe"
            ], 404);
        }
    }

    //cria uma pessoa no banco de dados
    public function createPessoa(Request $request)
    {
        $Pessoa = new Pessoa;
        $Pessoa->id = $request->id;
        $Pessoa->nome = $request->nome;
        $Pessoa->email = $request->email;
        $Pessoa->save();

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
        //pega uma pessoa apenas

        if (Pessoas::where('id', $id)->exists()) {
            $pessoa = Pessoas::find($id);
            $pessoa->delete();
            return response()->json([
                "message" => "Pessoa excluída com sucesso"
            ], 202);
        } else {
            return response()->json([
                "message" => "Pessoa não existe"
            ], 404);
        }
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
