@extends('master')
@section('content')
<h1>Machine List</h1>
<a href="{{route('create.machine')}}" class="btn btn-primary">Create Machine</a><br><br>
<div>
    <table class="table table-bordered">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Medicine Name</th>
            <th scope="col">Assigned Medicine</th>
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
                        <span class="badge badge-info">{{$data->medicine->name}}</span>
                    @endforeach
                </td>
                <td>{{$item->details}}</td>
                <td>
                    <a href="#"><i class="fas fa-edit"></i></a>
                    <a href="#"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
