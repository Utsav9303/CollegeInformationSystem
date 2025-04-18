<?php
include "..\connection.php";
$id=$_GET['id'];
$sql = "SELECT * FROM faculty_elec where id='$id'";
$all_faculty_elec = $conn->query($sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="style.css">
    <title>KDP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@500&family=Gelasio:ital@1&display=swap" rel="stylesheet">
    <link rel="Website icon" href="..\pictures\KDP_LOGO.png">
    <style>
        .section {
            display: flex;
            justify-content: space-between;
            padding: 50px;
            width: 70%;
            margin: 3rem auto 40px auto;
        }

        .section img {
            margin-top: 55px;
            margin-left: -30px;
            border-radius: 46%;
            height: 250px;
            border: 2px solid rgb(97, 175, 223);
        }
        .section .head{
            color: red;
        }
        .section p {
            color: darkslateblue;
            margin-left: 270px;
        }
        .vr{
            border-left: 5px solid rgb(97, 175, 223);
            height: 80%;
            position:absolute;
            left: 31%;
        }
    </style>

</head>

<body>

<?php
    include('..\header.php');
    ?>
    <div class="body">
    <?php
          $queries = array();
          parse_str($_SERVER['QUERY_STRING'], $queries);
          $id = $queries['id'];
          
            ?>
        <?php
        while ($row = mysqli_fetch_assoc($all_faculty_elec)) {
        ?>
           <h1><?php echo $row["name"];?></h1>
            <?php
                
            ?>
    </div>
    <div class="body">
    <div class="section">
        <div class="text">

            
           
            <img src="<?php echo $row["img"];?>" style="float: left;">
            <div class = "vr"></div>

            <P class="head">DESIGNATION:-</p><p><?php echo $row["role"];?></P>
            <P class="head">QUALIFICATION:-</p><p><?php echo $row["qualification"];?></P>
            <P class="head">EXPERIENCE:-</p><p><?php echo $row["Experience"];?></P>
            <P class="head">AREA OF INTEREST:-</p><p><?php echo $row["aoi"];?></P>
            <P class="head">WORK EXPERIENCE:-</p><p><?php echo $row["workexp"];?></P>
            <?php
                }
            ?>
           
        </div>
    </div>
    </div>

    <?php
    include('..\footer.php');
    ?>

</body>

</html>