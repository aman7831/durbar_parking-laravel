@extends('layouts.app')

@section('content')
  <div class="container">
    <div>
	    <h3>Please select your registered vehicle from here</h3>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th><center>Vehicle ID</center></th>
                        <th><center>Vehicle Name</center></th>
                        <th><center>Vehicle Number</center></th>
                        <th><center>Edit</center></th>
                    </tr>
                </thead>
            </table>
        </div>
  
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <td><center>Vehicle ID</center></td>
                        <td><center>Vehicle Name</center></td>
                        <td><center>Vehicle Number</center></td>
                        <td><center><button><a href="#">Select</a></button></center></td>
                    </tr>
                </tbody>
            </table>
        </div>
	    </div>

      <div>
        <div class="login-box">
          <h2>Reserve a Parking Space</h2>
          
          <form action="/reserve" method="post">
            @csrf
              
              <div class="user-box">
                <input type="text" name="vehicle_name" required="">
                <label>Vehicle Name : </label>
              </div>

              <div class="user-box">
                <input type="Text" name="vehicle_number" required="">
                <label>Vehicle Number : </label>
              </div>
         
              <div class="user-box">
                <button id="sub" style="width: 10px; height: 10px; cursor: pointer;">-</button>
                <input type="number" name="parkinglot" id="qtyBox" readonly="" value="1" required="">
                <button id="add" style="width: 10px; height: 10px; cursor: pointer;">+</button>
                <label>Parking lot (P) : </label>
              </div>

              <div class="user-box">
                <input  id="date_picker" type="date" name="date" required="">
                <label>Date : </label>
              </div>

              <div class="user-box">
                <input type="time" name="from_time" required="">
                <label>From (Time) : </label>
              </div>

              <div class="user-box">
                <input type="time" name="to_time" required="">
                <label>To (Time) : </label>
              </div>

              
              <a onclick="reserve()">
                <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <center>Let's Reserve the parking space</center>
              </button>
              </a>
              
            </form>
	    </div>
    </div>
  </div>


  
</div>
</div>
<script language="javascript">

  //date
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0');
  var yyyy = today.getFullYear();

  today = yyyy + '-' + mm + '-' + dd;
  $('#date_picker').attr('min',today);


  // parking lot 
  let addBtn = document.querySelector('#add');
		let subBtn = document.querySelector('#sub');
		let qty = document.querySelector('#qtyBox');
		
		addBtn.addEventListener('click',()=>{
			qty.value = parseInt(qty.value) + 1;
		});

		subBtn.addEventListener('click',()=>{
			if (qty.value <= 0) {
				qty.value = 0;
			}
			else{
				qty.value = parseInt(qty.value) - 1;
			}
		});

</script>

<hr style="color:rgba(253,88,88,255);; width:90%; border:0; border-bottom:1px solid #ccc; margin:10px auto;">
<center><p style="color:#ff7200;"> <a href="/home" style="color: rgba(253,88,88,255);">Durbar Parking</a> &copy; Copyright 2022, All Rights Reserve <a href="https://aman7831.github.io/aman._.bhandari/" style="color:#ff7200;"> Aman Bhandari</a></p></center>
@endsection