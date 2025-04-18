<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="login.css">
<title>
        Login
    </title>
    <link rel="Website icon" href="..\pictures\KDP_LOGO.png">
</head>

<body>
    <div class="container">

        <div class="left">

        </div>

        <div class="right">
            <h2>K. D. POLYTECHNIC</h2>
            <div class="center">
                <form action="login.php" method="POST">
                    <h3>Login Here</h3>
                    <div class="txt_field">
                        <input type="text" name="username" autocomplete="off" suggestion="off" required>
                        <span></span>
                        <label id="lbl">User ID</label>
                    </div>
                    
                    <div class="txt_field">
                        <input type="password" name="password" autocomplete="off" required>
                        <span></span>
                        <label id="lbl">Password</label>
                    </div>
                    <!-- <a href="forgot.html"><label id="forgot">Forgot Password?</label></a> -->
                    <button type="submit" name="submit">Login</button>
                    <a href="..\Home\home.php"><label id="other">Continue as guest user</label></a>
                </form>
                
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

    <?php

    if (isset($_POST['submit'])) {
        $uname = $_POST['username'];
        $pass = $_POST['password'];

        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, "college_proj");

        $sql = "SELECT * FROM login WHERE user_id='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['user'] = $uname;
            header("location: ../student/student.php");
        } else {?>
            <script>
                alert("User Id or Password is not valid!");
            </script>
<?php
        }

    }

    ?>
</body>

</html>