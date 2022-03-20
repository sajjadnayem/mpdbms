@extends('master')
@section('content')
<h1>Medicine Demand Details</h1>
    <table class="table table-bordered">
        <thead>
            <th scope="col">Demanded Medicine</th>
            <th scope="col">Quantity</th>
        </thead>
        <tbody>
            @foreach ($demand as $item)
            <tr>
                <td>{{$item->medicine->name}}</td>
                <td>{{$item->quantity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection