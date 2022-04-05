// Home Popup open 
function popup(){
            
    swal("Durbar parking!", "Please choose one option for selection", "success", {
        buttons: {
            danger: "RESERVED", 
            
            catch: {
                text: "USE NOW",
                
            },
            
            BOOKING : true,
        },
    })
    
    .then((value) => {
        switch (value) {

            case "BOOKING":
            swal("Are you sure to Book the parking on durbar parking?","Please confirm the booking.") 
                .then(function() { 
            window.location = "/book_now";
            });
            break;
        
            case "catch":
            swal("Have you booked a parking?", "If yes then please click on ok.")
            .then(function() { 
            window.location = "/use_now";
            });

            break;
        
            default:
            swal("Have you already reserved the parking space?","Please click on OK button to check the reserved parking details?").then(function() { 
            window.location = "/reserve_now";
            });
        }
    });
}
// HOme popup close 