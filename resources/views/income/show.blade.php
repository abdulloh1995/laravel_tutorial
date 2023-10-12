@extends('layouts.main')
@section('content')
    <div>
        <table class="table shadow-lg p-3 mb-5 bg-body rounded">
            <thead>
            <tr>
                <th scope="col">UserID</th>
                <th scope="col">Sum</th>
                <th scope="col">Short info</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">
                    {{ $income->userid }}
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
                <td class="d-flex">
                    <a class="link-warning " href="{{route('income.edit', $income->id)}}">
                        <button>edit</button>
                    </a>
                    <span class="mx-1">|</span>
                    <form action="{{route('income.delete', $income->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">delete</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
