<?php include('functions.php') ?>
<!-- =================REGISTRATION FORM================================= --> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body oncontextmenu="return false">
<div class="header">
    <h2>Sign Up</h2>
</div>
<form  method="POST" action="register.php">
    <?php echo display_error(); ?> 
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" value="<?php echo $username?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" value="<?php echo $email?>">
    </div>
    <div class="input-group">
        <label>Phone Number</label>
        <input type="number" name="phone" placeholder="Phone Number" value="">
    </div>
    <div class="input-group">
        <label>Password</i></label>
        <input type="password" name="password_1" placeholder="Password" value="">
    </div>
    <div class="input-group">
        <label>Confirm Password</i></label>
        <input type="password" name="password_2" placeholder="Repeat password" value="">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="register_btn">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>
