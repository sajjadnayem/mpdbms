@extends('master')
@section('content')
    <h1>Scheduling details</h1>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>From Date</th>
                <th>Details</th>
                <th>Time</th>
                {{-- <th>Machine Name</th> --}}
                <th>Hour</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($schedule as $key=>$item)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td scope="row">{{$item->from_date}}</td>
                        <td scope="row">{{$item->details}}</td>
                        <td scope="row">{{$item->time}}</td>
                        {{-- <td scope="row">{{$item->machine_id}}</td> --}}
                        <td scope="row">{{$item->hour}}</td>
                        <td scope="row">{{optional($item->schedule)->name}}</td>
                        <td>
                            <a href="{{route('schedule.print',$item->id)}}" class="btn btn-info">Print Schedule</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection