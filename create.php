﻿<?php
include 'authentication.php';
if(!empty($_POST)){
    $account = new authentication($_POST['uname'], $_POST['upass']);
    $account->createUser();
}
?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login Form</title>

    <link rel="stylesheet" href="login.css"/>
</head>

<body>
    <div class="header">
        <h1>PHP Login/Auth Example</h1>
    </div>

    <div class = "navBar">
        <ul class= "nav">
            <li class = "navItem"><a href="login.php">Login</a></li>
            <li class = "navItem"><a href ="create.php">Create New</a></li>
        </ul>
    </div>

    <div class="mainBody">

        <div class = "subContainer">
            <p>Login</p>

            <form method="POST" style="padding-top: 20px;">

                <label for ="user"> First Name </label>  
                <input type = "text" id ="fname" name  = "fname" placeholder="Enter First Name" style="margin-bottom: 20px;" required/> 

                <br>
                <label for ="user"> Last Name </label>  
                <input type = "text" id ="lname" name  = "lname" placeholder="Enter Last Name" style="margin-bottom: 20px;" required/> 

                <br>

                <label for ="user"> Username </label>  
                <input type = "text" id ="user" name  = "user" placeholder="Enter Username" style="margin-bottom: 20px;" required/> 

                <br>

                <label for = "pass"> Password </label>  
                <input type = "password" id ="pass" name  = "pass" placeholder="Enter Password" style="margin-bottom: 20px;" required/>  

                <br>

                <label for ="user"> Email Address </label>  
                <input type = "text" id ="email" name  = "email" placeholder="Enter Email Address" style="margin-bottom: 20px;" required/> 

                <br>

                <button type =  "submit"> Login </button>
                <!--<input type =  "submit" id = "btn" value = "Login" /> -->
         

            </form>
        </div>

    </div>

    <div class="footer">
        <h3>Copyright SOFE2800U Assignment 2</h3>
    </div>

</body>

</html>