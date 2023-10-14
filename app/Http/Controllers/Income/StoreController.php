<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Http\Requests\Income\StoreRequest;
use App\Models\Income;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $types = $data['types'];
        unset($data['types']);
        $income = Income::create($data);

        $income->types()->attach($types);

        return redirect()->route('income.index');
    }
}
