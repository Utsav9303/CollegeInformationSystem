<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: home_login.php");
}
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["pass"];
    $result = mysqli_query($conn, "SELECT * FROM stureg WHERE email = '$email' ");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row['password']){
          $_SESSION["login"] = true;
          $_SESSION["id"] = $row["id"];
          $_SESSION['email'] = $email;
          $_SESSION['password'] = $password;
          echo
          "<script> alert('Successfully Login'); </script>";
          header("Location: home_login.php");
          
        }
        else{
          echo
          "<script> alert('Invalid Password'); </script>";
        }
      }
      else{
        echo
        "<script> alert('User Does Not Exist'); </script>";
      }
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="newstyle.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Aspire</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a></li>
                    
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

        </div> 
        <div class="content">
            <h1>Back to  <br><span>School</span> <br>Course</h1>
            <p class="par">Start learning with Aspire Point<br>
                Get unlimited access to structured courses & doubt clearing sessions<br>Comprehensive learning programs
                & classes for class 9th and class 10th students</p>

                <button class="cn"><a href="#">JOIN US</a></button>

                <div class="form">
                <form action="" method="post" autocomplete="off">
                    <h2>Login Here</h2>
                    <input type="email" name="email" placeholder="Enter Email Here" required>
                    <input type="password" name="pass" placeholder="Enter Password Here"  required>
                    <!-- <button class="btnn"><a href="login.php">Login</a></button> -->
                    <button type="submit" name="submit" class="btnn">Login</button>

                    <p class="link">Don't have an account<br>
                    <a href="registration.php">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <!-- <a href="#"><ion-icon name="logo-twitter"></ion-icon></a> -->
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <!-- <a href="#"><ion-icon name="logo-skype"></ion-icon></a> -->
                    </div>
                </form>
                </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>