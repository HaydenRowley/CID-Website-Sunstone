<?php
  session_start();
  include_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CID Dashboard</title>
    <!--I won't do more than barebone HTML, since this isn't an HTML tutorial.-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>

    <!--A quick navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CID</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <?php
                if (isset($_SESSION["useruid"])) {
                  echo "<li class='nav-item'>
                  <a class='nav-link' href='home.php'>Home Page</a>
                </li>";
                  echo "<li class='nav-item dropdown'>
                  <a class='nav-link dropdown-toggle' href='home.php' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                    Quick Action
                  </a>
                  <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <li><a class='dropdown-item' href='https://docs.google.com/document/d/1gQhS_zlQfctPw4c7l-zHmYDdHu4A8I9os6np6oR2nQo/edit?usp=sharing'>Create Report</a></li>
                    <li><hr class='dropdown-divider'></li>
                    <li><a class='dropdown-item' href='https://drive.google.com/drive/folders/1wsKtD9d-w5AlLH8vzxfRH7AcAWdUhxOJ?usp=sharing'>view Report</a></li>
                    <li><hr class='dropdown-divider'></li>
                     <li><a class='dropdown-item nav-item' href='https://docs.google.com/spreadsheets/d/1I-8p9lTGtwaYaaRiMd5A-eBqNBnmTLVoGn6lYks1O0g/edit?usp=sharing'>View Evidence</a></li>
                    <li><hr class='dropdown-divider'></li>
                    <li><a class='dropdown-item nav-item' href='https://forms.gle/q8RYNqZ2G5bAinEr6'>Upload Evidence</a></li>
                  
                  </ul>
                </li>";
                echo "<li class='nav-item'>
                <a class='nav-link disabled'>Profile</a>
              </li>";
                  echo "<li class='nav-item'>
                  <a class='nav-link' href='logout.php'>Logout</a>
                </li>";
                }
                else {
                  echo "<li class='nav-item'>
                  <a class='nav-item' href='index.php'>Home</a>
                </li>";
                  echo "<li class='nav-item'>
                  <a class='nav-item' href='signup.php'>Signup</a>
                </li>";
                  echo "<li class='nav-item'>
                  <a class='nav-item' href='login.php'>Login</a>
                </li>";
                }
              ?>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

<!--A quick wrapper to align the content (ends in footer.php)-->
