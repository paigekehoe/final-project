@extends('layout')

@section('navbar')
                
@stop

@section('jumbo')
<h1> Available Rides</h1>

@stop

@section('content')


<p>
    Here are a list of upcoming rides

</p>


<div class = "results">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Destination</th>
                <th>Meeting Point</th>
                <th>Date</th>
                <th>Time</th>
                <th>Spots Available</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($ridelist as $ride)

        <tr>
            <td> {{ $ride->location_name }} </td>
            <td> {{ $ride->origin_id }} </td>
            <td> {{ $ride->datetime }} </td>
            <td> </td>
            <td> {{ $ride->spots_avail - $ride->spots_filled }} </td>
        </tr>
        @endforeach

        </tbody>
    </table>


</div>



@stop