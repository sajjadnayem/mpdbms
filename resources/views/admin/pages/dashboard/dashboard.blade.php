@extends('master')
@section('content')
<style>
    body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h2 class="m-b-20"><i class="fa-solid fa-capsules"></i><span>Medicine</span></h2>
                    {{-- <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2> --}}
                    <p class="m-b-0">Total Medicine<span class="f-right">{{$medicine->count()}}</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h2 class="m-b-20"><i class="fa fa-rocket f-left"></i>Machine</h2>
                    <p class="m-b-0">Total Machine<span class="f-right">{{$machine->count()}}</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h2 class="m-b-20"><i class="fa fa-refresh f-left"></i><span>Demand</span></h2>
                    <p class="m-b-0">Total Demand<span class="f-right">{{$demand->count()}}</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h2 class="m-b-20"><i class="fa-solid fa-calendar-check"></i><span>Schedule</span></h2>
                    <p class="m-b-0">Total Schedule<span class="f-right">{{$schedule->count()}}</span></p>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection