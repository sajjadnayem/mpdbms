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
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    [data-role="dynamic-fields"] > .form-inline + .form-inline {
    margin-top: 0.5em;
}

[data-role="dynamic-fields"] > .form-inline [data-role="add"] {
    display: none;
}

[data-role="dynamic-fields"] > .form-inline:last-child [data-role="add"] {
    display: inline-block;
}

[data-role="dynamic-fields"] > .form-inline:last-child [data-role="remove"] {
    display: none;
}
</style>
<h1>Create Machine</h1>
<form action="{{route('machine.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Machine Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Machine Name">
      </div>

      <div class="form-group">
        <label for="name">Enter Machine RPM</label>
        <input type="number" class="form-control" id="name" name="machine_rpm" placeholder="Enter Machine RPM">
      </div>
      <div class="form-group">
        <label for="name">RPM Quantity</label>
        <input type="number" class="form-control" id="name" name="rpm_quantity" placeholder="Enter Machine RPM Quantity">
      </div>
      <br>
      {{-- <div class="form-group">
        <label for="category">Assign Medicine</label>
        <select class="js-select2 form-control" multiple="multiple" name="medicine_name[]">
            @foreach ($medicine as $item)
            <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
          </select>
      </div> --}}


      {{-- add input field using js --}}

      <div class="form-group">
        <div data-role="dynamic-fields">
            <div class="form-inline">
             <div class="row g-4">
                 {{-- <div class="col">
                   <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                 </div> --}}
                 <div class="col">
                    {{-- <label for="category">Select Medicine Category</label> --}}
                    <select class="form-control" name="medicine_name[]">
                      <option>Select Medicine Category</option>
                      @foreach ($medicine as $item)
                      <option value="{{$item->id}}">{{$item->name}}</option>
                      @endforeach
                    </select>
                 </div>
                 <div class="col">
                     <input type="number" name="quantity" class="form-control" placeholder="Enter Medicine Quantity" aria-label="">
                   </div>
                   <div class="col">
                       <button class="btn btn-danger" data-role="remove"><i class="fa-solid fa-square-minus"></i></button>
                   </div>
                   <div class="col">
                       <button class="btn btn-primary" data-role="add"><i class="fa-solid fa-square-plus"></i></button>
                   </div>
               </div>
            </div>
        </div>
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
<script>
    $(function() {
 // Remove button click
 $(document).on(
     'click',
     '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
     function(e) {
         e.preventDefault();
         $(this).closest('.form-inline').remove();
     }
 );
 // Add button click
 $(document).on(
     'click',
     '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
     function(e) {
         e.preventDefault();
         var container = $(this).closest('[data-role="dynamic-fields"]');
         new_field_group = container.children().filter('.form-inline:first-child').clone();
         new_field_group.find('input').each(function(){
             $(this).val('');
         });
         container.append(new_field_group);
     }
 );
});

</script>
@endsection
