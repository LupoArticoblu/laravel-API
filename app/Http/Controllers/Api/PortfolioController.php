<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $data = [
            'name'=>'Ugo',
            'lastname'=> 'Deughi'
        ];
        return response()->json($data);
    }
}
