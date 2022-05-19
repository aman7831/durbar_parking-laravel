@extends('layouts.app')

@section('content')
<br><br>

<section>
  <!--for demo wrap-->
  <h1>All reserved vehicle for parking</h1>
  <br><br>
    <form method="post" action="/search_reserved_vehicle">
      @csrf
      <input type="text" name="vehicle_number" placeholder="Please search the vehicle details using vehicle number" required>
      <button>search</button>
    </form>
<br><br>

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <!-- <th><center>Reserve parking ID</center></th> -->
          <th><center>Vehicle Name</center></th>
          <th><center>Vehicle Number</center></th>
          <th><center>Parking lot</center></th>
          <th><center>Date</center></th>
          <th><center>Time (From)</center></th>
          <th><center>Time (To)</center></th>
          <th><center>User ID</center></th>
          <th><center>User Name</center></th>
          <th><center>Email</center></th>
          <!-- <th><center>Checkin Time</center></th>
          <th><center>Checkout Time</center></th> -->
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
          <!-- <td><center>{{$reserve->id}}</center></td> -->
          <td><center>{{$reserve->vehicle_name}}</center></td>
          <td><center>{{$reserve->vehicle_number}}</center></td>
          <td><center>{{$reserve->parkinglot}}</center></td>
          <td><center>{{$reserve->date}}</center></td>
          <td><center>{{$reserve->from_time}}</center></td>
          <td><center>{{$reserve->to_time}}</center></td>
          <td><center>{{$reserve->user_id}}</center></td>
          <td><center>{{$reserve->name}}</center></td>
          <td><center>{{$reserve->email}}</center></td>
          <!-- <td><center>Checkin Time</center></td>
          <td><center>Checkout Time</center></td>       -->
        </tr>
        @endforeach
        @endif
      </tbody>
      
    </table>
  </div>
</center>
    <br><br>
    <hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
    <center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Durbar Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="https://aman7831.github.io/aman._.bhandari/" style="color:#ff7200;"> Aman Bhandari</a></p></center>
</section>



<script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>
@endsection