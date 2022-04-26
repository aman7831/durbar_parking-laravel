@extends('layouts.app')

@section('content')
<br><br>

<section>
  <!--for demo wrap-->
  <h1>Registered Vehicle details</h1>
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
        <tr>
          <td><center>Vechile Id</center></td>
          <td><center>Vehicle Name</center></td>
          <td><center>Vehicle Number</center></td>
          <td><center>User ID</center></td>
          <td><center>User Name</center></td>
          <td><center>Registered At</center></td>
          <td><center>Edit Details</center></td>
          <td><center>Delete Details</center></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

<script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>
@endsection