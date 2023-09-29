<!DOCTYPE html>
<html>
    <title>Welcome To Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <head>
       
    </head>

    <body>

        <div class="login">
        <form id="login" method="get" action="">
            <!--<img src"#" alt="prasad image" width="500" height="600">-->
            <h2>Welcome</h2>
        <h2 id="lg">Login Page</h2>
            <lable><b>Username</b></lable><br>
            <input type="text" placeholder="Enter Username" id="Uname" name="Username"><br>
            <lable><b>Password</b></lable><br>
            <input type="password" name="Pass" id="pass" placeholder="Password"><br><br>
            <input type="button" value="Login"><br><br>
            <input type="checkbox" id="check"/>
            <span>Remember Me</span><br><br>
            Forgot <a href="#">Password</a><br><br>

            Click for <a href="Resistration.php">Resistration</a>
        </form>
        </div>
    </body>
</html>

<? 
if(isset($_POST["Username"]) && isset($_POST["Pass"])){
    $uname=$_POST["Username"];
    $Passs=$_POST["Passs"];
    echo "username Recived:".$uname;
    echo "Password Recived:".$Passs;
}
