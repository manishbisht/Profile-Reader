<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Manish Bisht">
    <link rel="icon" href="images/Logo.jpg">

    <title>Profile Reader by Manish Bisht</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>
  <body>
  <script type="text/javascript">
  function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

toggle_color(2000, 500);

function toggle_color(cycle_time, wait_time) {
 
    setInterval(function first_color() {
        document.getElementById('header').style.color = getRandomColor();
        setTimeout(change_color, wait_time);
    }, cycle_time);
 
    function change_color() {
        document.getElementById('header').style.color = getRandomColor();
    }
} 

     var Start = new SpeechSynthesisUtterance();
     Start.text = "Good Evening Sir. Welcome to Profile Reader. Today is "+Date()+"Enter the name of the person you want to search";
     Start.lang = 'en-US';
     Start.rate = 1.0;
     Start.onend = function(event) {  }
     speechSynthesis.speak(Start);
  </script>
     <div class="container">
        <div class="top">
		   <div class="head" align="center" id="header">ProfileReader</font></div>
           <form class="form-horizontal" action="search.html" method="get">
              <div class="form-group">
                 <div class="col-md-12">
                 <input type="text" name="user" id="user" class="form-control input-lg" placeholder="Enter the name of any person">
                 </div>
		         <div class="col-md-12" style="margin-top:20px;">
                    <div class="col-xs-6" style="padding:0;padding-right:10px;">
                    <input type="submit" value="Search" class="btn btn-primary btn-block btn-lg">
                    </div>
		            <div class="col-xs-6" style="padding:0;padding-left:10px;">
                    <input type="reset" value="Reset" class="btn btn-primary btn-block btn-lg">
                    </div>
		         </div>
              </div>
           </form>
        </div>

        <div class="footer" align="center">
		   <p>NOTE : We currently supports the profiles that are uploaded on Wikipedia
           <p>Designed, Developed and Maintained by <a href="http://getbootstrap.com">Manish Bisht</a></p>
		   <div style="margin-bottom:20px;" align="center">
              <a href="https://fb.me/profile.php?id=100000507658521"><img src="images/facebook.png"></a>&nbsp;
              <a href="https://twitter.com/manishbisht02/"><img src="images/twitter.png"></a>&nbsp;
              <a href="https://plus.google.com/+ManishBisht02/"><img src="images/google-plus.png"></a>
           </div>
        </div>
     </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
