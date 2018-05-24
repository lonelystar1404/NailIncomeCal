<html>
    <head>
        <title>Simple PHP check</title>
    </head>
    <body>
        <?php
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $student = $_POST['student'];
        if (!(empty($lastname)) && !(empty($student)) ){
            echo "Submission complete";
            echo '<br/>';
            echo "Last name value" ;
            echo "$lastname";
            echo '<br/>';
            echo "student checkbox value" ;
            echo "$student";
        }
        if((empty($lastname)) && (empty($student)) ){
            echo "Lastname not entered ";
            echo '<br/>';
            echo "student checkox not checked";
        }
        ?>
    </body>
</html>
