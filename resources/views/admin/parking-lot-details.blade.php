@extends('layouts.app')

@section('content')


<div class="container">
    <div>
	    <h3>PARKING LOT DETAILS</h3>
		
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><center>Parking Lot ID</center></th>
                        <th><center>Parking Lot Name</center></th>
                        <th><center>Price</center></th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>

                    </tr>
                </thead>
            </table>
        </div>
  
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                @foreach($parkinglots as $parkinglot)
                    <tr>
                        <td><center>{{ $parkinglot->id }}</center></td>
                        <td><center>{{$parkinglot->parking_lot_name}}</center></td>
                        <td><center>{{$parkinglot->price}}</center></td>
                        <td><center><a href="parkinglot/{{$parkinglot->id}}/edit"> Edit</a></center></td>
                        <td><center><a href="/parkinglot/{{$parkinglot->id}}"> Delete</a></center></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

	</div>

    <div>
		<div class="box box-blue">
			<p><strong>Please register the </strong> Parking lot details !</p>
		</div>

		<form action="/parkinglot" method="post">
            @csrf
			
			<div class="form-control">
				<input  type="text" name="parkinglotname" placeholder="Enter the parking lot name" required/>
				<img src="./images/icon-error.svg" alt="error-icon" />
			</div>

			<div class="form-control">
				<input type="text" name="price" placeholder="Enter the price" required>
				<img src="./images/icon-error.svg" alt="error-icon" />
			
            </div>

			<button type="submit"> Submit</button> 
        </form>
	</div>
</div>
@endsection