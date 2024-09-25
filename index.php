<!DOCTYPE html>
<html>
<head>
   <title>Login System</title>
</head>
<body>
   <h1>Login</h1>
   <form action="" method="post">
       <label for="username">Username:</label>
       <input type="text" name="username" required><br><br>
       <label for="password">Password:</label>
       <input type="password" name="password" required><br><br>
       <input type="submit" value="Login">
   </form>
   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST["username"];
       $password = md5($_POST["password"]); // Hash the password
       echo "<p>Username: " . $username . "</p>";
       echo "<p>Password Hash: " . $password . "</p>";
   }
   ?>
</body>
</html>
