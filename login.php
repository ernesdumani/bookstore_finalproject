<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Bookstore</title>
    <link rel="stylesheet" href="style.css">
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
header {
    margin-top: 15px;  
    padding: 10px 20px; 
    background: linear-gradient(to right, #574964, #9F8383, #C8AAAA );
    opacity: 89%;
    color: white;
    display: flex;
    flex-direction:row;
    align-items: center;
    text-align: center;
    justify-content:flex-start;
  }

  header .logo {
    display: flex;
    flex-direction: row;
    justify-content: center;
    text-align: center;
  }

body {
    background: 
        radial-gradient(circle, rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0.8) 100%), 
        url('books.png');
    background-size: cover;
    background-position: center;
    margin: 0;
    height: 100vh;
    opacity: 95%;
}



header .logo h1 {
    
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
header .logo h1 a{
    padding: 10px;

}

header nav{
    margin-left: 60%;
}

header nav ul {
    display: flex;
    flex-direction: row;
    list-style: none;
    
}

header nav ul li {
    margin-left: 20px;



}

header nav ul li a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    margin-top: 50px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
   


}
main {
    padding: 40px 20px;
}

</style>

</head>
<body>

<?php
session_start();
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["username"];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid username or password!";
    }
}
?>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

</body>
</html>
