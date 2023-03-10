login.php

<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <style>
      /* Add some basic styles */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
      }
      
      header {
        background-color: #333;
        color: #fff;
        padding: 20px;
        text-align: center;
      }
      
      h1 {
        margin: 0;
        font-size: 36px;
        letter-spacing: 2px;
      }
      
      main {
        margin: 20px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
      }
      
      p {
        font-size: 18px;
        line-height: 1.5;
      }
      
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
      }
      
      input[type="text"],
      input[type="password"],
      input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 18px;
        text-align: center;
      }
      
      input[type="submit"] {
        background-color: #333;
        color: #fff;
        cursor: pointer;
        transition: all 0.2s ease-in-out;
      }
      
      input[type="submit"]:hover {
        background-color: #fff;
        color: #333;
      }
      
      .register {
        text-align: center;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Login</h1>
    </header>
    <main>
      <form action="checkpoint.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Login">
      </form>
      <div class="register">
        <p>Don't have an account?</p>
        <a href="register.php">Register here</a>
      </div>
    </main>
  </body>
</html>
