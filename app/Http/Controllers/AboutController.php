<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $incomes = Income::all();

        return view('about');
    }


}
