<?php
$sort = $_GET['sort'];
$name = $_GET['name'];
session_start();
include('connection.php');

$sql = "SELECT * FROM $sort";
$res = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($res);
?>

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
        .box #subject h2 a {
            text-decoration: none;
            color: white;
        }

        .box #subject h2 a:hover {
            color: aqua;
        }

        .body .header h3 {
            color: white;
            font-size: 28px;
            font-family: math;
        }
    </style>
</head>

<body>
<?php
    include('..\header.php');
    ?>

    <div class="body">
        <div class="header">

            <h3>
                <?php echo $name; ?>
            </h3>

        </div>
        <div class="block">

            <?php
                for ($x = 1; $x <= $num_rows; $x++) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <div class="box">
                            <div id="code">
                                <h2>
                                    <?php echo "$row[unit_no]" ?>
                                </h2>
                            </div>
                            <div id="subject">
                                <h2>
                                    <a href="<?php echo $row["unit_href"]; ?>" target="_blank">
                                        <?php echo $row["unit_name"]; ?>
                                    </a>
                                </h2>
                                </a>
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