<?php include('processor/process_register.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php //include 'db/db.php'?>;

    <form class="form" action="register.php" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="fname" placeholder="First Name" required />
        <input type="text" class="login-input" name="lname" placeholder="Last Name" required />
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>

</body>
</html>