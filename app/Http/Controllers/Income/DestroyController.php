<?php

namespace App\Http\Controllers\Income;

use App\Http\Controllers\Controller;
use App\Models\Income;

class DestroyController extends Controller
{
    public function __invoke(Income $income)
    {
        $income->delete();
        return redirect()->route('income.index');
    }
}
