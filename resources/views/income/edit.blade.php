@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        <form class="row g-3" action="{{ route('income.update', $income->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="col-md-6">
                <label class="form-label">Clients</label>
                <select class="form-select" aria-label="Default select example" name="client_id">
                    <option selected>Open this select menu</option>
                    @foreach($clients as $client)
                        <option
                                {{$client->id == $income->client->id ? 'selected' : ''}} value="{{$client->id}}">{{$client->first_name}} {{$client->last_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="sum" class="form-label">Sum</label>
                <input type="text" class="form-control" id="sum" name="sum" value="{{$income->sum}}">
            </div>
            <div class="col-2">
                <label class="form-label">Valyuta</label>
                <select class="form-select" aria-label="Default select example" name="currency">
                    <option {{$income->currency ? 'selected' : ''}} value="1">$</option>
                    <option {{$income->currency ? 'selected' : ''}} value="2">So'm</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Types</label>
                <select class="form-select" multiple aria-label="multiple select example" name="types[]">
                    @foreach($types as $type)
                        <option
                                @foreach($income->types as $incomeType)
                                    {{$type->id == $incomeType->id ? 'selected' : '' }}
                                @endforeach
                                value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="short_info" class="form-label">Short info</label>
                <input type="text" class="form-control" id="short_info" name="short_info"
                       value="{{$income->short_info}}">
            </div>
            <div class="col-4">
                <label for="created_at" class="form-label">Created at</label>
                <input type="datetime-local" class="form-control" id="created_at" name="created_at"
                       value="{{$income->created_at}}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
