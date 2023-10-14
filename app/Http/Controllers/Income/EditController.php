<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Income;
use App\Models\Type;

class EditController extends Controller
{
    public function __invoke(Income $income)
    {
        $clients = Client::all();
        $types = Type::all();
        return view('income.edit', compact('income', 'clients', 'types'));
    }
}
