@extends('layouts.app')

@section('content')
    <br>
    <br>
    <center>
        <div class="heading">
            <h2>Reserved Parking details</h2>
        </div>
    </center>
    <br><br>
  <form method="post" action="/search_parking_details">
    @csrf
  <input type="text" name="vehicle_number" placeholder="Please search the vehicle using vehicle number" required>
  <button>search</button>
</form>
<br><br>

<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th><center>Vehicle Name</center></th>
          <th><center>Vehicle Number</center></th>
          <th><center>Parking lot</center></th>
          <th><center>REserver Parking ID</center></th>
          <th><center>Date</center></th>
          <th><center>Time (From)</center></th>
          <th><center>Time (To)</center></th>
          <th><center>Booked At</center></th>
          <th><center>Checkin</center></th>
          <th><center>Checkout</center></th>
          <th><center>Cancel reservation</center></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        @if(!empty($reserves))
        @foreach($reserves as $reserve)
        <tr>
          <td><center>{{$reserve->vehicle_name}}</center></td>
          <td><center>{{$reserve->vehicle_number}}</center></td>
          <td><center>{{$reserve->parkinglot}}</center></td>
          <td><center>{{$reserve->id}}</center></td>
          <td><center>{{$reserve->date}}</center></td>
          <td><center>{{$reserve->from_time}}</center></td>
          <td><center>{{$reserve->to_time}}</center></td>
          <td><center>{{$reserve->created_at}}</center></td>
          <td><center><a href="" style="background-color: #ff7200; border: none; color: white; padding: 10px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Checkin</a></center></td>
          <td><center><a href="/invoice/{{$reserve->id}}" style="background-color: #ff7200; border: none; color: white; padding: 10px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Checkout</a></center></td>
          <td><center><a href="/reserve/{{$reserve->id}}" style="background-color: #ff7200; border: none; color: white; padding: 10px 10px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;">Cancel reservation</a></center></td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
<!-- </div> -->

@endsection