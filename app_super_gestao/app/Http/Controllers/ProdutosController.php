<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = [
            0 => [
                'nome' => 'Produto 1',
                'id' => '01',
                'descricao' => 'Agua Sem Gás',
                'estoque' => '50',
            ],
            1 => [
                'nome' => 'Produto 2',
                'id' => '02',
                'descricao' => 'Agua Com Gás',
                'estoque' => '112',
            ],
            2 => [
                'nome' => 'Produto 3',
                'id' => '03',
                'descricao' => 'Refrigerante Lata',
                'estoque' => '385',
            ],
            3 => [
                'nome' => 'Produto 4',
                'id' => '04',
                'descricao' => 'Refrigerante 600ml',
                'estoque' => '81',
            ],
            4 => [
                'nome' => 'Produto 5',
                'id' => '05',
                'descricao' => 'Refrigerante 1L',
                'estoque' => '80',
            ],
            5 => [
                'nome' => 'Produto 6',
                'id' => '06',
                'descricao' => 'Refrigerante 2L',
                'estoque' => '55',
            ],
        ];

        return view('app.produtos', ['produtos' => $produtos]);
    }
}