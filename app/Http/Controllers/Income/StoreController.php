<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = request()->validate([
            'userid' => 'integer',
            'sum' => 'integer',
            'currency' => 'integer',
            'short_info' => '',
            'created_at' => 'date',
            'client_id' => 'integer',
            'types' => ''
        ]);

        $types = $data['types'];
        unset($data['types']);
        $income = Income::create($data);

        $income->types()->attach($types);

        return redirect()->route('income.index');
    }
}
