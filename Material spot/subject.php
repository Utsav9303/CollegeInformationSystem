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
    <style>
        
    </style>
</head>

<body>
    <?php
    include('..\header.php');
    ?>

<?php
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "college_proj");

    if (isset($_POST['sem1'])) {
        $sql = "SELECT * FROM sem1";
    } elseif (isset($_POST['sem2'])) {
        $sql = "SELECT * FROM sem2";
    } elseif (isset($_POST['sem3'])) {
        $sql = "SELECT * FROM sem3";
    } elseif (isset($_POST['sem4'])) {
        $sql = "SELECT * FROM sem4";
    } elseif (isset($_POST['sem5'])) {
        $sql = "SELECT * FROM sem5";
    } elseif (isset($_POST['sem6'])) {
        $sql = "SELECT * FROM sem6";
    }

    $res = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($res);


    ?>
    <div class="body">
        <div class="header">
            <?php
            if (isset($_POST['sem1'])) {
                echo '<h3>Semester - 1</h3>';
            } elseif (isset($_POST['sem2'])) {
                echo '<h3>Semester - 2</h3>';
            } elseif (isset($_POST['sem3'])) {
                echo '<h3>Semester - 3</h3>';
            } elseif (isset($_POST['sem4'])) {
                echo '<h3>Semester - 4</h3>';
            } elseif (isset($_POST['sem5'])) {
                echo '<h3>Semester - 5</h3>';
            } elseif (isset($_POST['sem6'])) {
                echo '<h3>Semester - 6</h3>';
            }
            ?>

        </div>
        <div class="block">

            <?php
            for ($x = 1; $x <= $num_rows; $x++) {
                while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="box">
                        <div id="code">
                            <h2>
                                <a href="<?php echo $row["syllabus"]; ?>" target="_blank">
                                <?php echo "$row[code]" ?> 
                                </a>
                            </h2>
                        </div>
                        <div id="subject">
                            <h2>
                                <a href="unit.php?sort=<?php echo $row['sort'] ?> & name=<?php echo $row['name'] ?> "><?php echo "$row[name]" ?></a>
                            </h2>
                        </div>
                    </div>

                    <?php
                }
            }
            ?>

        </div>
    </div>

    <?php
    include('..\footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

</body>

</html>