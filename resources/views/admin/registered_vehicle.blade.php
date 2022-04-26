@extends('layouts.app')

@section('content')
<br><br>

<section>
  <!--for demo wrap-->
  <h1>Registered Vehicle details</h1>
  <br><br>
  <form method="post" action="/search">
    @csrf
  <input type="text" name="id"><button>search</button>
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
          <td><center>User Name</center></td>
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
</section>

<script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
    </script>
@endsection