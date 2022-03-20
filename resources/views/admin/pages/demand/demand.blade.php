@extends('master')
@section('content')
<h1>Demand List</h1>
<a href="{{route('demand.create')}}" class="btn btn-primary">Create Demand</a><br><br>
<table class="table table-bordered" style="width: 100%">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">Created By</th>
        <th scope="col">From Date</th>
        <th scope="Col">To Date</th>
        <th scope="col">Note</th>
        {{-- <th scope="col">Demanded Medicine</th>
        <th scope="col">Demand Details</th>
        <th scope="col">Quantity</th> --}}
        <th>Action
        </th>
    </thead>
    <tbody>
        @foreach ($demand as $key=>$item)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->from_date}}</td>
            <td>{{$item->to_date}}</td>
            <td>{{$item->note}}</td>
            {{-- <td>
                @foreach ($item->medicine as $data)
                <span class="badge rounded-pill bg-primary">{{$data->medicine->name}}</span>
                    @endforeach
            </td>
            <td>{{$item->details}}</td>
            <td>{{$item->quantity}}</td> --}}
            <td>
                <a href="{{route('demand.view', $item->id)}})}}"><i class="fa-solid fa-eye"></i></a>
                <a href="#"><i class="fas fa-edit"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


