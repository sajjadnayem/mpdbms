@extends('master')
@section('content')
<h1>Medicine Demand Details</h1>
<table class="table table-bordered">
    <thead>
        <th scope="col">Demanded Medicine</th>
        <th scope="col">Demand Details</th>
        <th scope="col">Quantity</th>
    </thead>
    <tbody>
        @foreach ($demand as $item)
        <tr>
            <td>
                @foreach ($item->demandmedicine as $data)
                    <span class="badge rounded-pill bg-primary">{{$data->medicine->name}}</span>
                @endforeach
            </td>
            <td>{{$item->details}}</td>
            <td>{{$item->quantity}}</td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
{{-- <td>
            @foreach ($demand->demandmedicine as $data)
                <span class="badge rounded-pill bg-primary">{{$data->medicine->name}}</span>
            @endforeach
        </td> --}}
            {{-- <td>{{$demand->details}}</td>
            <td>{{$demand->quantity}}</td> --}}
