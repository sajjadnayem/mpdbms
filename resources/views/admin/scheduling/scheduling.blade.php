@extends('master')
@section('content')

    <h1>Scheduling details</h1>
@if ($status == null)
<form action="{{route('schedule.search')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
          <input name="from_date" type="date" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input name="To_date" type="date" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col">
            <label class="visually-hidden" for="autoSizingSelect">Preference</label>
            <select name="medicine_id" class="form-select" id="autoSizingSelect">
            <option value="0">Choose medicine</option>
            @foreach ($medicine as $info)
            <option value="{{$info->id}}">{{$info->name}}</option>
                
            @endforeach
            </select>
          </div>
          <div class="col">
            <button type="submit" class="btn btn-success">search</button>
          </div>
      </div>
</form>

<hr>
    

        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Schedule Date</th>
                <th>Details</th>
                {{-- <th>Starting Time</th> --}}
                {{-- <th>Machine Name</th> --}}
                <th>Hour</th>
                {{-- <th>Action</th> --}}
            </thead>
            <tbody>
                @foreach ($schedule as $key=>$item)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td scope="row">{{$item->schedule_date}}</td>
                        <td scope="row">{{$item->details}}</td>
                        {{-- <td scope="row">{{$item->starting_time}}</td> --}}
                        {{-- <td scope="row">{{$item->machine_id}}</td> --}}
                        <td scope="row">{{$item->hour}}</td>
                        <td scope="row">{{optional($item->schedule)->name}}</td>
                        {{-- <td>
                            <a href="{{route('schedule.print',$item->id)}}" class="btn btn-info">Print Schedule</a>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Schedule Date</th>
                <th>Details</th>
                {{-- <th>Starting Time</th> --}}
                {{-- <th>Machine Name</th> --}}
                <th>Hour</th>
                {{-- <th>Action</th> --}}
            </thead>
            <tbody>
                @foreach ($results as $key=>$item)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td scope="row">{{$item->schedule_date}}</td>
                        <td scope="row">{{$item->details}}</td>
                        {{-- <td scope="row">{{$item->starting_time}}</td> --}}
                        {{-- <td scope="row">{{$item->machine_id}}</td> --}}
                        <td scope="row">{{$item->hour}}</td>
                        {{-- <td scope="row">{{optional($item->schedule)->name}}</td> --}}
                        {{-- <td>
                            <a href="{{route('schedule.print',$item->id)}}" class="btn btn-info">Print Schedule</a>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
@endif

@endsection