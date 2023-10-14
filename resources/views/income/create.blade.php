@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        <form class="row g-3" action="{{ route('income.store') }}" method="post">
            @csrf
            <div class="col-md-6">
                <label class="form-label">Clients</label>
                <select class="form-select" aria-label="Default select example" name="client_id">
                    <option selected>Open this select menu</option>
                    @foreach($clients as $client)
                    <option
                        {{old('client_id') == $client->id ? ' selected ' : ''}}
                        value="{{$client->id}}">{{$client->first_name}} {{$client->last_name}}</option>
                    @endforeach
                </select>
                @error('client_id')
                <p class="text-danger">error</p>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="sum" class="form-label">Sum</label>
                <input value="{{old('sum')}}" type="text" class="form-control" id="sum" name="sum">
                @error('sum')
                <p class="text-danger">error</p>
                @enderror
            </div>
            <div class="col-2">
                <label class="form-label">Valyuta</label>
                <select class="form-select" aria-label="Default select example" name="currency">
                    <option selected value="1">$</option>
                    <option value="2">So'm</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Types</label>
                <select class="form-select" multiple aria-label="multiple select example" name="types[]">
                    @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="short_info" class="form-label">Short info</label>
                <input value="{{old('short_info')}}" type="text" class="form-control" id="short_info" name="short_info">
            </div>
            <div class="col-4">
                <label for="created_at" class="form-label">Created at</label>
                <input type="datetime" value="{{$currentDateTime}}" class="form-control" id="created_at" name="created_at">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
