<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Income;
use App\Models\IncomeType;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::all();
        $clients = Client::all();


        return view('income.index', compact('incomes', 'clients'));
    }

    public function create()
    {
        $clients = Client::all();
        $types = Type::all();
        $currentDateTime = Carbon::now();
        $currentDateTime = $currentDateTime->addHours(5);

        return view('income.create', compact('clients', 'currentDateTime', 'types'));
    }

    public function store()
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

    public function show(Income $income)
    {
//        $income = Income::findOrFail($id);
        return view('income.show', compact('income'));

    }

    public function edit(Income $income)
    {
        $clients = Client::all();
        $types = Type::all();
        return view('income.edit', compact('income', 'clients', 'types'));
    }

    public function update(Income $income)
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
