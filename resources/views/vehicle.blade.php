@extends('layouts.app')

@section('content')


<div class="container">
    <div>
	    <h3> Registered vehicle of {{ Auth::user()->name }} is :-</h3>
		
        <form method="post" action="/search">
    @csrf
  <input type="text" name="vehicle_number" placeholder="Please search the vehicle details using vehicle number" required>
  <button>search</button>
</form>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><center>Vehicle ID</center></th>
                        <th><center>Vehicle Name</center></th>
                        <th><center>Vehicle Number</center></th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                    </tr>
                </thead>
            </table>
        </div>
  
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    @foreach($vehicles as $vehicle)
                    <tr>
                        <td><center>{{ $vehicle->id }}</center></td>
                        <td><center>{{ $vehicle->vehicle_name }}</center></td>
                        <td><center>{{ $vehicle->vehicle_number }}</center></td>
                        <td><center><a href="/vehicle/{{$vehicle->id}}/edit"> Edit</a></center></td>
                        <td><center><a href="/vehicle/{{$vehicle->id}}"> Delete</a></center></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

	</div>

    <div>
		<div class="box box-blue">
			<p><strong>Please register the </strong> VEHICLE DETAILS HERE !</p>
		</div>

		<form class="box" id="form"  action="/vehicle" method="post">
            @csrf
			
			<div class="form-control">
				<input id="vehicle name" type="text" name="vehicle_name"  placeholder="Enter your vehicle name" required/>
				<img src="./images/icon-error.svg" alt="error-icon" />
			</div>

			<div class="form-control">
				<input id="vehicle number" type="text" name="vehicle_number"  placeholder="Enter your vehicle number" required>
				<img src="./images/icon-error.svg" alt="error-icon" />
			
            </div>

			<button type="submit"> Submit</button>
          

        </form>
	</div>
</div>
@endsection