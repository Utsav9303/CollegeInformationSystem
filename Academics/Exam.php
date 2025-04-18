<?php

   include('..\connection.php');

   $sql = "SELECT * FROM exam_tabel";
   $all_exam_tabel = $conn->query($sql);


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
   

    <style>
        .body h1{
    color: rgb(40, 72, 131);
    text-align:center ;
    margin-top: 40px;
    padding-top: 20px;
    padding-bottom: 20px;
}
main{
    max-width: 1500PX;
    width: 95%;
    height: auto;
    margin: 30px auto;
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 30px;
}
main .card{
    position: relative;
    left: 24%;
    max-width: 700px;
    flex: 1 1 100px;
    height: 10%;
    border: 1px  solid rgb(25, 93, 115);
    margin: 20px;
    background: linear-gradient(to right, #153854 35%, #2a72cb);
    border-radius: 10px;    
}
main .card:hover{
    transform: translateY(-5px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
main .card .caption{
    padding-left: 0em;
    text-align: center;
    margin-top: 0.5in;
}

main .card .caption .exam_tabel a{
    text-decoration: none;
    color: white;
    text-align: center;
}

        </style>
</head>

<body>

<?php
    include('..\header.php');
    ?>
    <div class="body">
        
            <h1>Exam Schedule</h1>
    </div>
    <div class="body">
            <main>
            <?php
            while($row = mysqli_fetch_assoc($all_exam_tabel)){
                ?>
                <div class="card">
                    <div class="caption">
                        <h2 class="exam_tabel">
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