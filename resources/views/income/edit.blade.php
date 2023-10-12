@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        <form class="row g-3" action="{{ route('income.update', $income->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="col-md-6">
                <label for="userName" class="form-label">UserName</label>
                <input type="text" class="form-control" id="userName" value="{{$income->userid}}" name="userid">
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
            <div class="col-6">
                <label for="short_info" class="form-label">Short info</label>
                <input type="text" class="form-control" id="short_info" name="short_info"
                       value="{{$income->short_info}}">
            </div>
            <div class="col-6">
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
