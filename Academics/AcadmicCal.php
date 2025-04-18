<?php

   include('../connection.php');

   $sql = "SELECT * FROM a_cal";
   $all_a_cal = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Academic.css">
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
    
    <div class="body">
        
            <h1>Academic Calendar</h1>
    </div>
    <br>
    <div class="body">
            <main>
            <?php
            while($row = mysqli_fetch_assoc($all_a_cal)){
                ?>
                <div class="card">
                    <div class="caption">
                        <h2 class="A_cal">
                            <a href="<?php echo $row["href"]; ?>" target="_blank">
                                <?php echo $row["name"]; ?>
                            </a>
                        </h2>
                    </div>
                </div>
                <?php
                }
                ?>
            
            </main>

    </div>
    <?php
    include('..\footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

</body>

</html>