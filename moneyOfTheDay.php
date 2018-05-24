
<html><head><title>Order food</title></head>
<body>

<?php
session_start();
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
// Create SQL statement

$moneyOfDay = $_POST['moneyOfDay'];
$tipOfDay = $_POST['tipOfDay'];
$sectionTransID =  $_SESSION['transID'];


if(!(empty($moneyOfDay))   ){
$date = date("Y-m-d");
$query = "INSERT INTO USERNAILS ( id,money, tip, dateOfDay, tranID) VALUES (NULL,'$moneyOfDay', '$tipOfDay',CURDATE(), '$sectionTransID' )";
 if (!($result = @ mysql_query ($query, $connection)))
 showerror();
   echo "Submission complete";
   echo '<br/>';
}else{
   echo "Please fill all fields, DO NOT leave a blank ";
   echo '<br/>';
         
}
header( "refresh:1;url=showInfo.php" );
?>

</table></body>
</html>
