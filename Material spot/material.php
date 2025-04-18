<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="subject.css">
    <title>KDP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@500&family=Gelasio:ital@1&display=swap"
        rel="stylesheet">
    <link rel="Website icon" href="..\pictures\KDP_LOGO.png">
</head>

<body>

<?php
    include('..\header.php');
    ?>

    <div class="materialbody">
        <form action="subject.php" method="POST">
            <div class="header">
            <a href=""><i class="fa-sharp fa-solid fa-square-left"></i></a>
                <h3>Study Material For CE Students</h3>
            </div>
            <div class="block">

                <div class="box">
                    <h2>Semester - 1</h2>
                    <hr>
                    <h3>Get Started</h3>
                    <button class="btn" name="sem1"><i class="fa-sharp fa-solid fa-circle-chevron-right"></i></button>
                </div>
                <div class="box">
                    <h2>Semester - 2</h2>
                    <hr>
                    <h3>Get Started</h3>
                    <button class="btn" name="sem2"><i class="fa-sharp fa-solid fa-circle-chevron-right"></i></button>
                </div>
                <div class="box">
                    <h2>Semester - 3</h2>
                    <hr>
                    <h3>Get Started</h3>
                    <button class="btn" name="sem3"><i class="fa-sharp fa-solid fa-circle-chevron-right"></i></button>
                </div>
                <div class="box">
                    <h2>Semester - 4</h2>
                    <hr>
                    <h3>Get Started</h3>
                    <button class="btn" name="sem4"><i class="fa-sharp fa-solid fa-circle-chevron-right"></i></button>
                </div>
                <div class="box">
                    <h2>Semester - 5</h2>
                    <hr>
                    <h3>Get Started</h3>
                    <button class="btn" name="sem5"><i class="fa-sharp fa-solid fa-circle-chevron-right"></i></button>
                </div>
                <div class="box">
                    <h2>Semester - 6</h2>
                    <hr>
                    <h3>Get Started</h3>
                    <button class="btn" name="sem6"><i class="fa-sharp fa-solid fa-circle-chevron-right"></i></button>
                </div>

            </div>
        </form>
    </div>

    <?php
    include('..\footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

</body>

</html>