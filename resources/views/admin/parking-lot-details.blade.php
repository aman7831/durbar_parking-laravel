@extends('layouts.app')

@section('content')
<br><br>

Parking details
<form action="/parkinglot" method="post">
    @csrf 
    <input type="text" name="parkinglotname" placeholder="Enter the parking lot name">
    <input type="text" name="price" placeholder="Enter the price">
    <button type="submit"> Submit </button>
</form>

@foreach($parkinglots as $parkinglot)
{{ $parkinglot->id }}
{{$parkinglot->parking_lot_name}}
<a href="parkinglot/{{$parkinglot->id}}/edit"> Edit</a>
<a href="/parkinglot/{{$parkinglot->id}}">Delete</a>
@endforeach




@endsection