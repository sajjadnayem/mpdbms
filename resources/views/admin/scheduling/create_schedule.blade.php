@extends('master')
@section('content')
<h1>Create Schedule</h1>
    <form action="{{route('store.schedule')}}" method="POST">
        @csrf
        <input name="demand_details_id" type="text" hidden value="{{$demandDetails->id}}">
       
          <div class="form-group">
            <label for="name">Details</label>
            <input type="text" class="form-control" id="name" name="details" placeholder="Enter any note">
          </div>
          <div class="form-group">
            <label for="name">TimeStrap</label>
            <input type="datetime-local" class="form-control" id="name" name="time" placeholder="Enter any note">
          </div>
          <div class="form-group">
            <label for="Assigned Machine">Assigned Machine</label>
            <select name="selecteMachine" class="form-control" id="">
               @foreach ($machines as $machine)
               <option value="{{$machine->id}}">{{$machine->machine->name}}</option>
               @endforeach
              </select>
          </div><br>
          <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection