@extends('master')
@section('content')
<form action="{{route('demand.add')}}">
    @csrf
    <div class="row">
            <div class="form-group col-6">
              <label for="medicine">Medicine Name</label>
              <select name="medicine" class="form-control">
                  <option>Select Medicine Category</option>
                  @foreach ($medicine as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group col-6">
              <label for="quantity">Quantity</label>
              <input name="quantity" type="number" class="form-control" placeholder="Please Enter Quantity">
            </div>
    </div><br>
    <button type="submit" class="btn btn-success">Add Medicine</button><br>
    {{-- <div class="form-group">
        <label for="name">From Date</label>
        <input type="date" class="form-control" id="name" name="from_date" placeholder="Enter From Date">
      </div>
      <div class="form-group">
        <label for="name">TO Date</label>
        <input type="date" class="form-control" id="name" name="to_date" placeholder="Enter To Date">
      </div><br>

      <button type="submit" class="btn btn-primary">Create Demand</button>  --}}
</form>
<h1>Medicines</h1>
<a href="{{route('demand.forgot')}}" class="btn btn-info">Clear</a><br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Medicine name</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @if(!empty($cart))
    @foreach($cart as $data)
    <tr>
        <td>{{$data['name']}}</td>
        <td>
            <form action="{{route('demand.update',$data['medicine_id'])}}" method="post">
                @csrf
                <input value="{{$data['quantity']}}" name="quantity" type="number" class="form-control" placeholder="Enter Quantity">
            </form>
        </td>
        <td>
            <a href="{{route('demand.delete',$data['medicine_id'])}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
<form action="{{route('store.demand')}}" method="POST">
  @csrf
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <label for="name">From Date</label>
        <input type="date" class="form-control" id="name" name="from_date" placeholder="Enter From Date">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="name">To Date</label>
        <input type="date" class="form-control" id="name" name="to_date" placeholder="Enter From Date">
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label for="name">Note</label>
        <input type="text" class="form-control" id="name" name="note" placeholder="Enter any note">
      </div>
    </div>
  </div><br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>







{{-- <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="select222.css">
<link rel="stylesheet" href="">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<form action="{{route('store.demand')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Created By</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter  Name">
      </div>
      <div class="form-group">
        <label for="name">From Date</label>
        <input type="date" class="form-control" id="name" name="from_date" placeholder="Enter From Date">
      </div>
      <div class="form-group">
        <label for="name">TO Date</label>
        <input type="date" class="form-control" id="name" name="to_date" placeholder="Enter To Date">
      </div>
      <div class="form-group">
        <label for="category">Demanded Medicine</label>
        <select class="js-select2 form-control" multiple="multiple" name="medicine_name[]">
            @foreach ($medicine as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="name">Demand Details</label>
        <input type="text" class="form-control" id="name" name="details" placeholder="Enter Demand Details">
      </div>
      <div class="form-group">
        <label for="name">Quatity</label>
        <input type="number" class="form-control" id="name" name="quantity" placeholder="Enter Quantity">
      </div><br>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    $(".js-select2").select2({
    closeOnSelect : false,
    placeholder : "Select Medicine",
    allowHtml: true,
    allowClear: true,
    tags: true
});
</script> --}}
@endsection
