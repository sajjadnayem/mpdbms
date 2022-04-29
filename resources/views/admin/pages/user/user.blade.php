@extends('master')
@section('content')
    <h1>User list</h1>
    <a href="{{route('user.create')}}" class="btn btn-primary">Create User</a><br><br>
    <table id="dataTable" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone No</th>
                <th scope="col">Role</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userInfo as $key=>$user)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->role}}</td>
                    <td><img src="{{url('/uploads/user/'.$user->image)}}" style="border-radius:5px" width="50px" class="rounded mx-auto d-block" alt="user image"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection