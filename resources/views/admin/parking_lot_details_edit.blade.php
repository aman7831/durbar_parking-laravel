@extends('layouts.app')

@section('content')
<br><br>

Parking details Edit
<form action="/parkinglot/{{$parkinglots->id}}" method="post">
    @csrf 
    <input type="text" name="parkinglotname" placeholder="Enter the parking lot name" value = "{{$parkinglots->parking_lot_name}}">
    <input type="text" name="price" placeholder="Enter the price" value ="{{$parkinglots->price}}">
    <button type="submit"> Submit </button>
</form>



@endsection