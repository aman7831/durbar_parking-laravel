<title>Durbar Parking</title>


    <video autoplay muted loop id="myVideo">
        <source src="{{ asset('img/Preloader@Durbarmarg_Parking.mp4') }}" type="video/mp4">
    </video>
    
    <div class="content">       
        <h1>WELCOME TO</h1><h2>DURBAR PARKING</h2>
        <button id="myBtn" onclick="myFunction()">PAUSE</button>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <p>Parking of vehicle is one of the basic necessities required in a city. <br>
            Durbar Parking is used for managing the records of the incoming and outgoing vehicles in a durbar marg, Kathmandu.</p>
            <a href="/home" >
            <button id="myBtn1">READ MORE</button></a>
    </div>
<script>
      var video = document.getElementById("myVideo");
      var btn = document.getElementById("myBtn");
      
      function myFunction() {
        if (video.paused) {
          video.play();
          btn.innerHTML = "Pause";
        } else {
          video.pause();
          btn.innerHTML = "Play";
        }
      }
</script>
</body>
</html>

<style>
    body
{
    overflow: hidden;
    margin: 0px;
    padding: 0px;

}

#myVideo {
    position: fixed;
    width: 100%; 
    min-height: 100%;
  }
  .content {
    position: relative;
    background: rgba(0, 0, 0, 0.9);
    color: #f1f1f1;
    width: 100%;
    min-height: 100%;
  }
  .content h1
  {
      font-family: impact;
      font-size: 25px;
      text-align: center;
      color: white;
      padding-top: 12px;
  }
  .content h2
  {
      font-family: impact;
      font-size: 35px;
      text-align: center;
      color:  #ff7200;

  }
  .content p
  {
      text-align: center;
  }
  #myBtn1 {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: rgb(32, 30, 30);
    color: #fff;
    cursor: pointer;
    margin-left: 43%;
    margin-bottom: 3%;
}
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: rgb(32, 30, 30);
  color: #fff;
  cursor: pointer;
  margin-left: 43%;
  margin-bottom: 2%;
}
#myBtn1:hover {
  background: #ff7200;
  color: black;
}
  #myBtn:hover {
    background: #ff7200;
    color: black;
  }
  

</style>