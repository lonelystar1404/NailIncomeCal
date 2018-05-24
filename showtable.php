<html><head>
<title>Show Table</title>

    <link href="signin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
</head>
<body style="background-color: powderblue;">
    <h3 style="text-align: center";> 
        <strong>Table Result</strong> <br>
        <hr>
        
    </h3>
    <div class="container">

<table class="table">
<tr class="success">
    <th>ID</th>
    <th>Food</th>
    <th>Quantity</th>
    <th>Delivery Method</th>
    <th>Date Delivery</th>
    <th>Customer Comments</th>
    <th>Check Box</th>
    <th>Customer Id</th>
    <th>User name</th>
    <th>Password</th>
    <th>Email</th>
    <th>Telphone</th>
</tr>
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
$query = "SELECT * FROM ORDERTABLE484 INNER JOIN USERS on userid=Cus_id";
// Execute SQL statement
if (!($result = @ mysql_query ($query, $connection)))
  showerror();
// Display results
while ($row = @ mysql_fetch_array($result))
  echo "<tr class='info'>
<td>{$row["Oid"]}</td>
<td>{$row["Foodname"]}</td>
<td>{$row["Quantity"]}</td>
<td>{$row["Delivery"]}</td>
<td>{$row["Dateselect"]}</td>
<td>{$row["Comments"]}</td>
<td>{$row["Paycheck"]}</td>
<td>{$row["Cus_id"]}</td>
<td>{$row["username"]}</td>
<td>{$row["pw"]}</td>
<td>{$row["email"]}</td>
<td>{$row["telphone"]}</td>
</tr>";
header( "refresh:5;url=admin.php" );
?>

</table>

</div>
</body>
</html>
