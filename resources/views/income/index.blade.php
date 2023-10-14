@extends('layouts.main')
@section('content')
    <div>
        <a href="{{route('income.create')}}">
            <button type="button" class="btn btn-primary mb-2 float-end">Add income
            </button>
        </a>
        <table class="table shadow-lg p-3 mb-5 bg-body rounded">
            <thead>
            <tr>
                <th scope="col">Client</th>
                <th scope="col">Sum</th>
                <th scope="col">Short info</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($incomes as $income)
                <tr>
                    <th scope="row">
                        {{ $income->client->first_name}}
                    </th>
                    <td>
                        {{ $income->sum }} @if($income->currency == 1) $ @else So'm @endif
                    </td>
                    <td>
                        {{ $income->short_info }}
                    </td>
                    <td>
                        {{ $income->created_at }}
                    </td>
                    <td>
                        <a class="link-info " href="{{route('income.show', $income->id)}}">
                            about
                        </a>
                        <span>|</span>
                        <a class="link-warning " href="{{route('income.edit', $income->id)}}">
                            edit
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
