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

            <form method="POST">

                <label> Username: </label>  
                <input type = "text" id ="user" name  = "user" style="margin-bottom: 20px;" /> 

                <br>

                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" style="margin-bottom: 20px;" />  

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