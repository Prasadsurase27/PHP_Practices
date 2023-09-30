<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>
</head>
<body>
  <h2>User Login</h2>
  <form action="#" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Login">
    <a href="./register.php">click here for registration</a>
  </form>
<!--   
  <script>
    function changepage1(){
      window.location.href= "./register.php";
    }
  </script> -->
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

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            echo "Login successful. Welcome, " . $user['username'];
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
mysqli_close($conn);
?>
