// /blog/ → must be in /usr/local/apache2/htdocs

//blog.php

<?php
// Read the current blog posts from the file
$file = 'blog_posts.json';
$blog_posts = json_decode(file_get_contents($file), true);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome to the Blog of Project Magenta</title>
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
    </style>
  </head>
  <body>
    <header>
      <h1>Project Magenta</h1>
    </header>
    <main>
      <h2>Welcome to The Blog of Project Magenta</h2>
      <p>Here you will find our latest posts and musings on a variety of topics.</p>
      
      <h2>Latest Posts</h2>
      <ul>
        <li><a href="Post1.php">Post 1</a></li>
        <li><a href="Post2.php">Post 2</a></li>
        <li><a href="Post3.php">Post 3</a></li>
        <li><a href="Post4.php">Post 4<a></li>
      </ul>
    </main>
  </body>
</html>
