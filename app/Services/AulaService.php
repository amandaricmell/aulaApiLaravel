<?php 
namespace App\Services;

use Ill
use Illuminate\Support\Facades\Http;

class AulaService {
    public function __construct()
    {
        $this->host = 'http://localhost:8000';
    }

    public function getPessoas($filter = null)
    {
        $response = Http::get()
        dd($response);
    }
}   