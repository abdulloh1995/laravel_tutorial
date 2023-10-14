<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class UpdateController extends Controller
{
    public function __invoke(Income $income)
    {
        $data = request()->validate([
            'userid' => 'integer',
            'sum' => 'required|integer',
            'currency' => 'integer',
            'short_info' => '',
            'created_at' => 'date',
            'client_id' => 'integer',
            'types' => ''
        ]);
        $types = $data['types'];
        unset($data['types']);

        $income->update($data);
        $income->types()->sync($types);

        return redirect()->route('income.show', $income->id);
    }
}
