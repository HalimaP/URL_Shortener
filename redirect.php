<?php // Get Redirect Code

include_once  "dbconfig.php";
  if(isset($_GET['cp'])){
  $rd= $_GET["cp"];
  // Run PDO Query
  $stmt = $db_con -> prepare( "select * from red where shrt = '$rd' " );
  // Execute Statment
  $stmt -> execute();
  // Fatch Result
  $result = $stmt -> fetch();
  
  $res= $result["url"];
 
  header('HTTP/1.1 301 Moved Permanently');
  header("location:".$res);

}
  ?>