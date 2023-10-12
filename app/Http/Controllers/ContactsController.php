<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $incomes = Income::all();

        return view('contact');
    }


}
