<!-- <!DOCTYPE html>
<html>
<title>
    
Registration Form
</title>
<head>
<link rel="stylesheet" type="text/css" href="Rstyle.css">
</head>
<body>
    <div class="registration">
    <form method="get" action="">
        <h2>Resistration Here</h2>
        <p>Username</p>
        <input type="text" id="username" placeholder="username"/><br><br>
        <p>Password</p>
        <input type="text" id="password" placeholder="Passward"/><br><br>
        <p>Confirm Password</p>
        <input type="text" id="confirmpass" placeholder="Confirm Password"/><br><br>
        <button class="btn" src="Login.php">Submit</button>
        <a type="button" href="Login.php">Back</a> 
    </form>
    </div>
        

</body>
</html>
 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
</head>
<body class="flex">
  <h2>User Registration</h2>
  <form action="login.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" require><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" require><br><br>
    <input type="submit" value="register">
  </form>

</body>
</html>

 <?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate and sanitize input
    // You should add more robust validation and sanitization
    // This is a simple example, not recommended for production
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Hash the password
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $query)) {
        echo "User registered successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

