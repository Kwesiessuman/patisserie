<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login|La Pâtisserie</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="css/login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500' rel='stylesheet' type='text/css'>
</head>


<body>
    
<div class="container" id="container">
    <div class="form-container signup-container">
        <form action="signupverif.php" method="POST">
            <h2>Create Account</h2>
           
            <input type="name" name="username" placeholder="Name" />
            <input type="email" name="email" placeholder="Email" />
            <input type="phone" name="phone" placeholder="Phone" />
            <input type="password" name="password" placeholder="Password" />
            <label for="usertype">Select User Type:</label>
            <select name="usertype" id="usertype">
                <option name=usertype value="client">Client</option>
                <option name=usertype value="admin">Admin</option>
            </select>
            <button type="submit" id="signup" name="signup">Sign Up</button>
        </form>
    </div>

    <div class="form-container login-container">
        <form action="loginverif.php" method="POST">
            <h1>LA PÂTISSERIE</h1>
            
            <input type="email" name="email" placeholder="Email" />
            <input type="password" name="password" placeholder="Password" />
            <label for="usertype">Select User Type:</label>
            <select name="usertype" id="usertype">
                <option name=usertype value="client">Client</option>
                <option name=usertype value="admin">Admin</option>
            </select>
            <a href="#">Forgot your password?</a>
            <button type="submit" id="login" name="login">Login</button>
        </form>
    </div>

    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h2>Welcome!</h2>
                <p>Login and engage your taste buds</p>
                <button class="ghost" id="signIn">Login</button>
            </div>

            <div class="overlay-panel overlay-right">
                <h2>Join Us!</h2>
                <p>Sign up and explore different flavours</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
        
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/login.js"></script>

</body>

