@extends('master')
@section('content')
<style>
    .container{
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    box-sizing: border-box;
    margin: 40px 0 0;
    padding: 20px 0 28px;
    width: 30rem;
    }
</style>
<h1>Medicine Details</h1>
<div class="container">
    <img class="card-img rounded mx-auto d-block" src="{{url('/uploads/medicine/'. $medicine->image)}}" style="border-radius: 4px;" height=300px; width= "80px;" alt="medicine image">
    {{-- <p> <img class="card-img rounded mx-auto d-block" src="{{url('/uploads/medicine/'.medicine->image)}}" style="border-radius: 4px;" height=300px; width= "80px;" alt="medicine image"></p> --}}
    <p><b>Medicine Name: {{$medicine->name}}</b></p>
    <p><b>Medicine Category Name: {{optional($medicine->category)->name}}</b></p>
    <p><b>Medicine Generic Name: {{optional($medicine->generic)->name}}</b></p>
    <p><b>Medicine Details: {{$medicine->details}}</b></p>
</div>
@endsection
