@extends('master')
@section('content')
<h1>Medicine Demand Details</h1>
    <table class="table table-bordered">
        <thead>
            <th scope="col">Demanded Medicine</th>
            <th scope="col">Quantity</th>
        </thead>
        <tbody>
            @foreach ($demand as $item)
            @php
                $schedule = App\Models\Schedule::where('demand_details_id',$item->id)->first();
                $is_scheduled = false;
                if($schedule){
                    $is_scheduled = true;
                }
            @endphp
            <tr>
                <td>{{$item->medicine->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>
                    @if ($is_scheduled == true)
                        <a href="{{route('schedule.print', $item->id)}}" class="btn btn-info">Print Schedule</a>
                    @else
                        <a href="{{route('schedule.create',$item->id)}}" class="btn btn-primary">Create Schedule</a>
                    @endif
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection