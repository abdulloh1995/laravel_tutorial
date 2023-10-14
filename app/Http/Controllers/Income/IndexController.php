<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Income;

class IndexController extends Controller
{
    public function __invoke()
    {
        $incomes = Income::all();
        $clients = Client::all();


        return view('income.index', compact('incomes', 'clients'));
    }
}
