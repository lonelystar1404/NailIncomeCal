
<html>
<body>

<?php
include 'db.inc.php';
  session_start();
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
// Create SQL statement
$techid = $_SESSION['techID'];
$query2 = "INSERT INTO NAILTRANSACTIONS (numID, techID) VALUES ('0', '$techid')";
 if (!($result2 = @ mysql_query ($query2, $connection))){
 showerror();
   echo "Submission complete";
   echo '<br/>';


 }
  // Connect the last transaction of the user
  $query2 = "SELECT transID FROM NAILTRANSACTIONS WHERE techID =  ' $techid ' ORDER BY transID DESC LIMIT 1 ";
            if (!($result2 = @ mysql_query ($query2, $connection))){
               showerror();
             }
            if ($row2 = @ mysql_fetch_array($result2)){
                $_SESSION['transID'] = $row2['transID'];
            }
header( "refresh:1;url=showInfo.php" );

?>
</table></body>
</html>
