// Home Popup open 
function popup(){
            
    swal("Durbar parking!", "Please choose one option for selection", "success", {
        buttons: {
            danger: "RESERVED", 
            
            catch: {
                text: "USE NOW",
                
            },
            
            // BOOKING : true,
        },
    })
    
    .then((value) => {
        switch (value) {

            // case "BOOKING":
            // swal("Are you sure to Book the parking on durbar parking?","Please confirm the booking.") 
            //     .then(function() { 
            // window.location = "/book_now";
            // });
            // break;
        
            case "catch":
            swal("Please select the vehicle", "to use the parking space now.")
            
            .then(function() { 
            window.location = "/use_now";});
            break;
        
            default:
            swal("Please select the vehicle","to reserve a parking.").
            then(function() { 
            window.location = "/reserve_now";
            });
        }
    });
}

// HOme popup close 

//reserve successful open
function reserve(){
    swal({
        title: "Reserved Successfully!",
        text: "Thank you for choosing durbar parking",
        icon: "success",
        button: "ok",
      });
}

//reserve successful close

