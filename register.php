//register.php

<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <style>
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
        border-radius: 5px;
      }
      
      label {
        display: block;
        margin-bottom: 10px;
        font-size: 18px;
      }
      
      input[type="text"], input[type="email"], input[type="password"] {
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      
      input[type="submit"] {
        padding: 10px 20px;
        background-color: #333;
        color: #fff;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      
      .error {
        color: red;
        margin-bottom: 10px;
        font-size: 16px;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Register</h1>
    </header>
    <main>
      <?php if (!empty($errors)): ?>
      <div class="error">
        <?php foreach ($errors as $error): ?>
          <p><?php echo $error; ?></p>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
      <form action="verification.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Register">
      </form>
    </main>
  </body>
</html>
