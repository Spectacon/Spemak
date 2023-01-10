<?php //include 'db/db.php'?>;
<?php
    //include 'db/db.php'
    require('db/db.php');
    //
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $fname    = stripslashes($_REQUEST['fname']);
        $fname = mysqli_real_escape_string($con, $fname);
        $lname    = stripslashes($_REQUEST['lname']);
        $lname = mysqli_real_escape_string($con, $lname);
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `user` (fname, lname, username, password, email, create_datetime)
                     VALUES ('$fname','$lname','$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } 
?>