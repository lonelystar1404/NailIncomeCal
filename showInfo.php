

<!DOCTYPE html>
<html>
<head lang ="en">
  <head>
    <meta charset="utf-8">
   

   
    <link href="signin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- http://stackoverflow.com/questions/10616314/how-do-i-validate-a-phone-number-with-javascript -->
    <script>
      function validatePhone(){
    var phone = document.getElementById("tele2");
    var RE = /^[\d\.\-]+$/;
    if(!RE.test(phone.value))
    {
        alert("You have entered an invalid phone number");
        return false;
    }
    return true;
}

    </script>
 

  </head>
</head>
<header>
   <div class="navbar navbar-default navbar-tt navbar-static-top">
     <ul class="nav navbar-nav nav-tt navbar-right navbar-lwr">
            <li >
        
              <a class="btn btn-danger" href="logout.php" role="button">Log Out</a>
            </li>
         
          </ul>
          </div>
</header>
<body>
    
    <div class="container">

        <h2 id="demo" ></h2>
        <script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
        </script>

<form class = "form-signin" method="post" action="moneyOfTheDay.php"  ">
    
    <fieldset>
        <h2 class="form-signin-heading" >Income of Day</h2>

        <input type="number" name="moneyOfDay" id="moneyOfDay" class="form-control" placeholder="Enter Working Money of The Day" required autofocus>
        <input type="number" name="tipOfDay" id="tipOfDay" class="form-control" placeholder="Enter Tip" required>   

         <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
    </fieldset>
</form>


        
    </div>
    <div class = "container">

    <table class="table">
        <tr class="success">
            <th>ID</th>
            <th>Money Of Day</th>
            <th>Tip Of Day</th>
            <th>Date </th>

        </tr>

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
        
        $userID = $_SESSION['techID'];
        $sectionTransID = $_SESSION['transID'];

        // Create SQL statement
        $query = "SELECT * FROM USERNAILS WHERE tranID = '$sectionTransID' " ;
        // Execute SQL statement
        if (!($result = @ mysql_query ($query, $connection)))
        showerror();
        // Display results
        while ($row = @ mysql_fetch_array($result))
        echo "
        <tr class='info'>
            <td>{$row["id"]}</td>
            <td>{$row["money"]}</td>
            <td>{$row["tip"]}</td>
            <td>{$row["dateOfDay"]}</td>

        </tr>";

        ?>

    </table>
     <?php
      echo "<h3> Total money is: ";
     
      $query2 = "SELECT SUM(money) AS total_money FROM USERNAILS WHERE tranID = '$sectionTransID' ";
      $result2 = @ mysql_query ($query2, $connection);
      $row2 = mysql_fetch_assoc($result2); 
      $sum = $row2['total_money'];
      echo "   $sum  ";
      
  
    
    echo "<h3> Total tip is: ";
     
      $query2 = "SELECT SUM(tip) AS total_tip FROM USERNAILS WHERE tranID = '$sectionTransID' ";
      $result2 = @ mysql_query ($query2, $connection);
      $row2 = mysql_fetch_assoc($result2); 
      $sumTip = $row2['total_tip'];
      echo "   $sumTip  ";
      echo "  </h3>";
      
      echo "<h3> Total 60% of Money is: ";
      $worksum = $sum*0.6 ;
      echo "  $worksum";
      echo "  </h3>";
      
      
      $check = round(0.6 * $worksum) + $sumTip ;
      $cash = round(0.4* $worksum) ;

      echo "<h3> Total Cash is:  ";
      echo "  $cash";
      echo "<h3> Total Check is:  ";
      echo "  $check";
      echo "  </h3>";
      
      ?>
    </div>
       <div class="container">
         <a class="btn btn-success" href="newcycle.php" role="button">New Cycle</a>
       </div>
</body>
    <hr>
<footer class="center">

    <p>
        
        <p class="center">  Copy right &copy; Thien Nguyen</p>
    </p>
</footer>
</html>