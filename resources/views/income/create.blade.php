@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-center">
        <form class="row g-3" action="{{ route('income.store') }}" method="post">
            @csrf
            <div class="col-md-6">
                <label for="userName" class="form-label">UserName</label>
                <input type="text" class="form-control" id="userName" value="55" name="userid">
            </div>
            <div class="col-md-4">
                <label for="sum" class="form-label">Sum</label>
                <input type="text" class="form-control" id="sum" name="sum">
            </div>
            <div class="col-2">
                <label class="form-label">Valyuta</label>
                <select class="form-select" aria-label="Default select example" name="currency">
                    <option selected value="1">$</option>
                    <option value="2">So'm</option>
                </select>
            </div>
            <div class="col-6">
                <label for="short_info" class="form-label">Short info</label>
                <input type="text" class="form-control" id="short_info" name="short_info">
            </div>
            <div class="col-6">
                <label for="created_at" class="form-label">Created at</label>
                <input type="datetime-local" class="form-control" id="created_at" name="created_at">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
