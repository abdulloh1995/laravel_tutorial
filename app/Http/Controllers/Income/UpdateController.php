<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Http\Requests\Income\UpdateRequest;
use App\Models\Income;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Income $income)
    {
        $data = $request->validated();
        $types = $data['types'];
        unset($data['types']);

        $income->update($data);
        $income->types()->sync($types);

        return redirect()->route('income.show', $income->id);
    }
}
