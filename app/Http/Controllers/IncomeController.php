<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $client = Client::find(1);
        $income = Income::find(2);

        dd($income->client);
        dd($client->incomes);
//        return view('income.index', compact('incomes'));
    }

    public function create()
    {
        return view('income.create');
    }

    public function store()
    {
        $data = request()->validate([
            'userid' => 'integer',
            'sum' => 'integer',
            'currency' => 'integer',
            'short_info' => 'string',
            'created_at' => 'date'
        ]);

        Income::create($data);

        return redirect()->route('income.index');
    }

    public function show(Income $income)
    {
//        $income = Income::findOrFail($id);
        return view('income.show', compact('income'));

    }

    public function edit(Income $income)
    {
        return view('income.edit', compact('income'));
    }

    public function update(Income $income)
    {
        $data = request()->validate([
            'userid' => 'integer',
            'sum' => 'integer',
            'currency' => 'integer',
            'short_info' => 'string',
            'created_at' => 'date'
        ]);

        $income->update($data);

        return redirect()->route('income.show', $income->id);
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('income.index');
    }

    public function delete()
    {
        $income = Income::find(1);
        $income->delete();
        dd('delete income');
    }

    public function firstOrCreate()
    {

        $income = Income::firstOrCreate([
            "userid" => 88
        ], [
            'userid' => 88,
            'sum' => 3500,
            'currency' => 1,
            'status' => 1,
            'short_info' => 'updated'
        ]);
        dump($income->sum);
        dd('first or create');
    }

}
