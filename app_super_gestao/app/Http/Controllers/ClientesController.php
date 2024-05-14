<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = [
            0 => [
                'nome' => 'Cliente 1',
                'cpf' => '810.800.740-10',
                'ddd' => '12',
                'telefone' => '942777-1100',
            ],
            1 => [
                'nome' => 'Cliente 2',
                'cpf' => '850.785.819-87',
                'ddd' => '41',
                'telefone' => '987659-9886',
            ],
            2 => [
                'nome' => 'Cliente 3',
                'cpf' => '122.236.779-84',
                'ddd' => '42',
                'telefone' => '41232-9768',
            ],
            3 => [
                'nome' => 'Cliente 4',
                'cpf' => '090.785.819-87',
                'ddd' => '41',
                'telefone' => '9886-0842',
            ],
            4 => [
                'nome' => 'Cliente 5',
                'cpf' => '410.761.984.26',
                'ddd' => '21',
                'telefone' => '98426-5137',
            ],
        ];

        return view('app.clientes', ['clientes' => $clientes]);
    }
}