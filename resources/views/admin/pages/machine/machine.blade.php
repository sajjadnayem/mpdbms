@extends('master')
@section('content')
<h1>Machine List</h1>
<a href="{{route('create.machine')}}" class="btn btn-primary">Create Machine</a><br><br>
<div>
    <table id="dataTable" class="table table-bordered">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Machine Name</th>
            <th scope="col">Assigned Medicine</th>
            <th scope="col">Machine RPM</th>
            <th scope="col">RPM Quantity</th>
            <th scope="col">Machine Details</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($machine as $key=>$item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->name}}</td>
                <td>
                    @foreach ($item->medicine as $data)
                        <span class="badge bg-info text-dark">{{$data->medicine->name}}- {{$data->quantity}}</span>
                    @endforeach
                </td>
                <td>{{$item->machine_rpm}}</td>
                <td>{{$item->rpm_quantity}}</td>
                <td>{{$item->details}}</td>
                <td>
                    <a href="#"><i class="fas fa-edit"></i></a>
                    <a href="{{route('machine.delete', $data->id)}}"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

