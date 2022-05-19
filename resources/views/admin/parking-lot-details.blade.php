@extends('layouts.app')

@section('content')


<div class="container">
    <div>
	    <h3>PARKING LOT DETAILS</h3>
		

        <form method="post" action="/search_parking_lot_name">
            @csrf
        <input type="text" name="parking_lot_name" value="P" placeholder="Please search with parking lot name" required>
        <button>search</button>
        </form>
        <br>
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
                        <td><center>Rs. {{$parkinglot->price}}</center></td>
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
				<input  type="text" name="parkinglotname" placeholder="Enter the parking lot name" value ="P"required/>
				<img src="./images/icon-error.svg" alt="error-icon" />
			</div>

			<div class="form-control">
				<input type="text" name="price" placeholder="Enter the price" value="50" required>
				<img src="./images/icon-error.svg" alt="error-icon" />
			
            </div>

			<button type="submit"> Submit</button> 
        </form>
	</div>
</div>
@endsection