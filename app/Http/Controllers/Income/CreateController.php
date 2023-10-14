<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Type;
use Illuminate\Support\Carbon;

class CreateController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        $types = Type::all();
        $currentDateTime = Carbon::now();
        $currentDateTime = $currentDateTime->addHours(5);

        return view('income.create', compact('clients', 'currentDateTime', 'types'));
    }
}
