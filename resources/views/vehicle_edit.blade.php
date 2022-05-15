@extends('layouts.app')

@section('content')

<div class="container">
    <div>
	    <h3>EDIT PARKING LOT DETAILS</h3>
		
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
        
        </div>
	</div>

    <div>
		<div class="box box-blue">
			<p><strong>EDIT VEHICLE DETAILS</strong> !</p>
		</div>

		<form action="/vehicle/{{ $vehicle->id }}" method="post">
            @csrf
			
			<div class="form-control">
				<input  type="text" name="vehicle_name" placeholder="Enter the parking lot name" value = "{{ $vehicle->vehicle_name }}" required/>
				<img src="./images/icon-error.svg" alt="error-icon" />
			</div>

			<div class="form-control">
				<input type="text" name="vehicle_number" placeholder="Enter the price" value ="{{ $vehicle->vehicle_number }}" required>
				<img src="./images/icon-error.svg" alt="error-icon" />
			
            </div>

			<button type="submit"> Submit</button> 
        </form>
	</div>
</div>

@endsection