@extends('master')
@section('content')



{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"> --}}
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />

<link rel="stylesheet" href="select222.css">
<link rel="stylesheet" href="">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

<h1>Create Machine</h1>
<form action="{{route('machine.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Machine Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Machine Name">
      </div>
      <div class="form-group">
        <label for="category">Assign Medicine</label>
        <select class="js-select2 form-control" multiple="multiple" name="medicine_name[]">
            @foreach ($medicine as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
          <label for="name">Machine Details</label>
          <textarea id="details" class="form-control" name="details" rows="3" cols="50"></textarea>
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
</script>
@endsection
