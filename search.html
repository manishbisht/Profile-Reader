<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Manish Bisht">
    <link rel="icon" href="images/Logo.jpg">

    <title><?php echo isset($_GET['user'])?$_GET['user']:"Invalid Name"; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/talk.js"></script>
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
  </script>
  
     <div class="container">
		    <div style="font-size:50px;" id="header">ProfileReader</div>
            <form class="form-horizontal" action="search.php" method="get">
      <div class="form-group">
         <div class="col-xs-8" style="padding-right:0;">
            <input type="text" name="user" id="user" class="form-control input-lg" style="border-radius:5px 0 0 5px;" placeholder="<?php echo isset($_GET['user'])?$_GET['user']:"Enter the name of any person"; ?>">
         </div>
         <div class="col-xs-4" style="padding:0;padding-right:10px;">
            <input type="submit" value="Search" style="border-radius:0 5px 5px 0;" class="btn btn-primary btn-block btn-lg">
         </div>
      </div>
      </form>
           </div>
           <?php
		   $user = isset($_GET['user'])?$_GET['user']:false;
		   echo "<script> say('Profile Reader has searched for ".$user."'); </script>";
		   $user = str_replace(' ', '_', $user);
		   $url="https://en.wikipedia.org/wiki/".$user;
		   $cookie = tmpfile();
$userAgent = 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31' ;

$getdata = curl_init($url);

$options = array(
    CURLOPT_CONNECTTIMEOUT => 20 , 
    CURLOPT_USERAGENT => $userAgent,
    CURLOPT_AUTOREFERER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEFILE => $cookie,
    CURLOPT_COOKIEJAR => $cookie ,
    CURLOPT_SSL_VERIFYPEER => 0 ,
    CURLOPT_SSL_VERIFYHOST => 0
);

curl_setopt_array($getdata, $options);
$uhtml = curl_exec($getdata);
curl_close($getdata);
           
		   echo '<div class="container"><table class="table">';
		   
		   $regex = '/<span class="fn">(.*?)</s';
		   preg_match($regex,$uhtml,$uname);
		   if($uname!=NULL)
		   {
		   echo '<tr><td>Name</td><td>'.$uname[1].'</td></tr>';
		   echo "<script> say('User Name : ".$uname[1]."'); </script>";
		   }
		   	   
		   $regex = '/<td class="title">(.*?)<\/td>/s';
		   preg_match($regex,$uhtml,$title);
		   if($title!=NULL)
		   {
		   $title[1]=strip_tags($title[1]);
		   echo '<tr><td>Title</td><td>'.$title[1].'</td></tr>';
		   echo "<script> say('Title : ".$title[1]."'); </script>";
		   }
		   
		   $regex = '/<span class="nickname">(.*?)<\/span>/s';
		   preg_match($regex,$uhtml,$nickname);
		   if($nickname!=NULL)
		   {
		   echo '<tr><td>Nick Name</td><td>'.$nickname[1].'</td></tr>';
		   echo "<script> say('Nick Name : ".$nickname[1]."'); </script>";
		   }
		   
		   $regex = '~<span class="bday">(.+?)</span>~';
		   preg_match($regex,$uhtml,$bday);
		   if($bday!=NULL)
		   {
		   echo '<tr><td>Date of Birth</td><td>'.$bday[1].'</td></tr>';
		   echo "<script> say('Date of Birth : ".$bday[1]."'); </script>";
		   }
		   
		   $regex = '~<span class="birthplace">(.+?).<~';
		   preg_match($regex,$uhtml,$bplace);
		   if($bplace!=NULL)
		   {
		   $bplace[1]=strip_tags($bplace[1]);
		   echo '<tr><td>Birth Place</td><td>'.$bplace[1].'</td></tr>';
		   echo "<script> say('Birth Place : ".$bplace[1]."'); </script>";
		   }
		   
		   $regex = '~<td class="role">(.+?)</td>~';
		   preg_match($regex,$uhtml,$occupation);
		   if($occupation!=NULL)
		   {
		   $occupation[1]=strip_tags($occupation[1]);
		   echo '<tr><td>Occupation</td><td>'.$occupation[1].'</td></tr>';
		   echo "<script> say('Occupation : ".$occupation[1]."'); </script>";
		   }
		   
		   $regex = '~<td class="role">(.+?)</span>~';
		   preg_match($regex,$uhtml,$urole);
		   if($urole!=NULL)
		   {
		   echo '<tr><td>Role</td><td>'.$urole[1].'</td></tr>';
		   echo "<script> say('Role : ".$urole[1]."'); </script>";
		   }
		   
		   $regex = '~<td class="org">(.+?)</td>~';
		   preg_match($regex,$uhtml,$org);
		   if($org!=NULL)
		   {
		   $org[1]=strip_tags($org[1]);
		   echo '<tr><td>Employer</td><td>'.$org[1].'</td></tr>';
		   echo "<script> say('Employer of : ".$org[1]."'); </script>";
		   }
		   
		   $regex = '~<td class="label">(.+?).<sup~';
		   preg_match($regex,$uhtml,$residence);
		   if($residence!=NULL)
		   {
		   $residence[1]=strip_tags($residence[1]);
		   echo '<tr><td>Residence</td><td>'.$residence[1].'</td></tr>';
		   echo "<script> say('Lives at : ".$residence[1]."'); </script>";
		   }
		   
		   $regex = '~<td class="category">(.+?)</td>~';
		   preg_match($regex,$uhtml,$nationality);
		   if($nationality!=NULL)
		   {
		   $nationality[1]=strip_tags($nationality[1]);
		   echo '<tr><td>Nationality</td><td>'.$nationality[1].'</td></tr>';
		   echo "<script> say('Nationality : ".$nationality[1]."'); </script>";
		   }
		   
		   $regex = '~<th scope="row"><span class="nowrap">Spouse(s)</span></th>(.+?)</tr>~';
		   preg_match($regex,$uhtml,$wife);
		   if($wife!=NULL)
		   {
		   $wife[1]=strip_tags($wife[1]);
		   echo '<tr><td>Spouse(s)</td><td>'.$wife[1].'</td></tr>';
		   echo "<script> say('Spouse(s) : ".$wife[1]."'); </script>";
		   }
		   
		   $regex = '~<span class="url">(.+?)</span>~';
		   preg_match($regex,$uhtml,$website);
		   if($website!=NULL)
		   {
		   $website[1]=strip_tags($website[1]);
		   echo '<tr><td>Website</td><td>'.$website[1].'</td></tr>';
		   echo "<script> say('Website URL : ".$website[1]."'); </script>";
		   }
		   
		   $regex = '~<p>(.+?)</p>~';
		   preg_match($regex,$uhtml,$text);
		   if($text!=NULL)
		   {
		   $text[1]=strip_tags($text[1]);
		   $text[1] = preg_replace('~\[[^\]]*\]~', '', $text[1]);
		   $textarray = explode('.', $text[1]);
		   $arrlength = count($textarray);
		   for($x = 0; $x < $arrlength; $x++) {
              echo "<script> say('".$textarray[$x]."'); </script>";
             }
		   }
		   
		   echo '</table></div>';
		   ?>
		   
		   
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
