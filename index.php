<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>

 <title>PHP URL SHORTENER </title>
  <link rel="stylesheet" href="style.css" type="text/css"  />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body style="background-color: #b8c3d4 ">

<?php
  // Include One time Database Connetion parameter file
   include_once  "dbconfig.php";
   include_once "redirect.php";
 
?>

    <div id="main">


     	<form id="form1" method="post" action="" >


             <table>
  <tbody>


   <tr >
      <td><h1 >Link shortener</h1></td>

    </tr>

    <tr>

      <td>   <input id="txt_field" type="text" value= "" placeholder = " Paste your url" name="url"/></td>
    </tr>

     
    <tr>
      <td><input class="button" type="submit" name="submit" value="Generate" /> </form> </td></tr>

    <tr>

    <tr><td>

   <?php
   
   include_once "post.php"
   
   ?>


      </td></tr>
  </tbody>
</table>
</div>

</body>
</html>
