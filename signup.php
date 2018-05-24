<html>
<?php

// Connect database
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the cars database
if (!mysql_select_db($databaseName, $connection))
  showerror();
 
$username2 = $_POST['username3'];
$pw2 = $_POST['pw3'];



if(!(empty($username2)) && !(empty($pw2))  ){
$query = "INSERT INTO NAILTECHS (username, pw) VALUES ('$username2', '$pw2')";
 if (!($result = @ mysql_query ($query, $connection)))
 showerror();
   echo "Submission complete";
   echo '<br/>';
}else{
   var_dump($pw2);
   echo "Please fill all fields, DO NOT leave a blank ";
   echo '<br/>';
         
}

 $query3 ="SELECT techID FROM NAILTECHS WHERE username = '$username2'  ";
 if (!($result3 = @ mysql_query ($query3, $connection)))
                    showerror();

                while ($row3 = @ mysql_fetch_array($result3)){
$techid = $row3['techID'];

$query2 = "INSERT INTO NAILTRANSACTIONS (numID, techID) VALUES ('0', '$techid')";
 if (!($result2 = @ mysql_query ($query2, $connection))){
 showerror();
   echo "Submission complete";
   echo '<br/>';
}else{
   var_dump($pw2);
   echo "Please fill all fields, DO NOT leave a blank ";
   echo '<br/>';
         
}
}

header( "refresh:1;url=index.html" );

?>



</html>
