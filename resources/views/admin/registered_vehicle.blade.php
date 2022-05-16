@extends('layouts.app')

@section('content')
<br><br>

<section>
  <!--for demo wrap-->
  <h1>Registered Vehicle details</h1>
  <br><br>
  <form method="post" action="/search">
    @csrf
  <input type="text" name="vehicle_number" placeholder="Please search the vehicle details using vehicle number" required>
  <button>search</button>
</form>
<br><br>

  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th><center>Vehicle ID</center></th>
          <th><center>Vehicle Name</center></th>
          <th><center>Vehicle Number</center></th>
          <th><center>User ID</center></th>
          <th><center>User Name</center></th>
          <th><center>Registered At</center></th>
          <th><center>Edit Details</center></th>
          <th><center>Delete Details</center></th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        @if(!empty($vehicle))
        @foreach ($vehicle as $v)
        <tr>
          
          <td><center>{{ $v->id }}</center></td>
          <td><center>{{ $v->vehicle_name }}</center></td>
          <td><center>{{ $v->vehicle_number }}</center></td>
          <td><center>{{ $v->name}}</center></td>
          <td><center>User Name</center></td>
          <td><center>Registered At</center></td>
          <td><center>Edit Details</center></td>
          <td><center>Delete Details</center></td>
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