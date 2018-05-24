<?php
   ob_start();
   session_start();
?>
<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>
<html><head><title>Log In</title></head>
<body>

<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
// Create SQL statement

$pw = $_POST['pw'];
$username = $_POST['username'];

$username = htmlspecialChars($username, ENT_QUOTES, 'UTF-8');
$query = "SELECT * FROM NAILTECHS WHERE pw = '$pw' and username = '$username' ";
// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection))){
  showerror();
}
// Display results
if ($row = @ mysql_fetch_array($result)){
  
  echo "Successful Login    ";
  var_dump($row['username']);
  $_SESSION['valid'] = true;
  $_SESSION['timeout'] = time();
  $_SESSION['username'] = $username;
  $_SESSION['techID'] = $row['techID'];
  $tempTechID  = $row['techID'];
  
  // Connect the last transaction of the user
  $query2 = "SELECT transID FROM NAILTRANSACTIONS WHERE techID =  ' $tempTechID ' ORDER BY transID DESC LIMIT 1 ";
            if (!($result2 = @ mysql_query ($query2, $connection))){
               showerror();
             }
            if ($row2 = @ mysql_fetch_array($result2)){
                $_SESSION['transID'] = $row2['transID'];
            }
  
  
} else {
  echo "Failed login, Try again ";
  
}

?>
<br>
<?php
// Echo session variables that were set on previous page
echo "Welcome  " . $_SESSION['username'] . ".<br>";
if( $_SESSION['username']=='admin'){
   header( "refresh:2;url=admin.php" );
}else{
   if($row['username']== $username && $row['pw']== $pw  )
  header( "refresh:1;url=showInfo.php" );
  else

  header( "refresh:1;url=index.html" );
}
?>
</table></body>
</html>
