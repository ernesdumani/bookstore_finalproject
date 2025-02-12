
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #8174A0, #9F8383, #C8AAAA, #FFF2AF );
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: linear-gradient(to left, #8174A0, #A888B5, #EFB6C8, #FFD2A0 );
      opacity: 80%;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    .login-container input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .login-container button {
      width: 100%;
      padding: 10px;
      background-color: #9B7EBD;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
    }

    .login-container button:hover {
      background-color: #A35C7A;
    }

    .error {
      color: red;
      margin: 10px 0;
      font-size: 14px;
    }

    .login-container a {
      text-decoration: none;
      color: #007BFF;
      font-size: 14px;
    }

    .login-container a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>

    <?php if (isset($error)): ?>
      <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="post">
      <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div>
        <button type="submit" name="login">Login</button>
      </div>
    </form>

  </div>

</body>
</html>
<body>