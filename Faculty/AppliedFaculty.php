<?php

   include('..\connection.php');

   $sql = "SELECT * FROM faculty_applied";
   $all_faculty_applied = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
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
            <h1>Applied Faculty</h1>
    </div>
    <div class="body">
    <main>
        <?php
        
            while($row = mysqli_fetch_assoc($all_faculty_applied)){

        ?>
        <div class="card">
            <div class="image">
             <img src="<?php echo $row["img"]; ?>" alt="">
            </div>
            <div class="caption">
                <p class="faculty_name">
                <?php echo $row["name"]; ?>
                </p>
                <p class="role"><?php echo $row["role"]; ?></p>
                <form action="AppliedFaculty.php" method="POST">
                        <a href="Applieddetails.php?id=<?php echo $row['id'] ?>" class="button">More Info.</a>
                    </form>
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