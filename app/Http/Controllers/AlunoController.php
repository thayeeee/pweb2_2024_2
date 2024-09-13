<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class AlunoController extends Controller
{
    function index(){

        return view('aluno.form');
    }
}
