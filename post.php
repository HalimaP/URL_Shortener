<?php
if(isset($_POST['submit'])){
require_once 'dbconfig.php';

  if (!$_POST['url'])
        {

  die('<p><font  color="red" size="3" >Do not empty the required fields!</span><p>');
  }


  if(isset($_POST['url'])){



$c = $_POST['url'];


// random short code
$id=rand(10000,99999);
$shorturl=base_convert($id,20,36);
$stmt = $db_con->prepare("INSERT INTO red(url,shrt)
VALUES(:eurl, :eshrt)");
$stmt->bindParam(":eurl", $c);
$stmt->bindParam(":eshrt", $shorturl);

// execute statment
if($stmt->execute())
{
  echo "Success"; // you can add any success message.
}

		// Display URL

        echo '<p>Short URL: <a  target="_blank" href="index.php?cp='.$shorturl.'">5/'.$shorturl.'</a></p>';


exit;




}

  else{


  		  die('<p><font color="red" size="38"><strong> Sorry Captcha is not right. </strong> </font></p>' );



  }


}

?>