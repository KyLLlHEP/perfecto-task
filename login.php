<?php

require_once 'connperfecto.php';
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Perfecto Sculptures</title>
    <link href="reset.css" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
   
    <style>
      table {
        border-collapse: separate;
        border-spacing: 10px 40px;
      }

      .tabletext {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        color: purple;
      }

      .basket {
        background-color: white;
        color: white;
        border: none;
        padding: 5px;
        text-align: center;
      }

      .centre {
        text-align: center;
      }
    </style>
  </head>

  <body>
    <hr class="psBlue" />
    <header>
      <img src="images/ps_logo.png" alt="Perfecto Logo" class="logo" />
      <div class="header-content">
        <form class="search" action="search.php" method="post">
          <input
            type="text"
            placeholder="Search for your product"
            required
            class="formField"
          />
          <input type="submit" value="Search" class="formSubmit" />
        </form>
      </div>
    </header>
    <hr class="psBlue" />
    <div class="nav">
      <nav class="left">
        <a href="index.html">New Arrivals</a> <a href="index.html">Bronze</a>
        <a href="index.html">Stone</a> <a href="index.html">Wood</a>
      </nav>
      <nav class="right"><a href="index.html">Login or Sign Up</a></nav>
    </div>
    <main class="content">
      <section class="registerSection">
        <h4>Login</h4>

        <div class="registerForm">
          <form class="registerForm">
          
          
            <input
              type="email"
              placeholder="Email Address"
              required
              class="formField"
            />
            <input
              type="password"
              placeholder="Password"
              required
              class="formField"
            />
            <input type="submit" value="Register Now" class="formSubmit" />
          </form>
        </div>
      </section>
      <hr class="psBlue" />
      <footer></footer>
    </main>
  </body>
</html>
