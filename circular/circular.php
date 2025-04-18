<?php


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "college_proj";

$conn = new mysqli($servername, $username, $password, $db_name);

?>

<html>

<head>
    <link rel="stylesheet" href="circular.css">
        <link rel="stylesheet" href="home.css">
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
    

</head>

<body>
    <div style="
    color: rgb(40, 72, 131);
    text-align:center ;
    margin-top: 20px;
    padding-top: 0.5px;
    padding-bottom: 0.5px;
    height: auto;
    width: 90%;
    margin-left: 5%;
    background-color: rgba(211, 237, 248, 0.515);">
    <h1>Circular</h1>
    </div><br>
    <div class="circular_container">
        <div class="circular">
            <div class="select">
                <form action="circular.php" method="POST">
                    <select name="branch" id="branch" name="select">
                        <option value="">-- Select Branch --</option>
                        <option value="ALL">ALL</option>
                        <option value="COMPUTER ENGINEERING" id="computer">COMPUTER ENGINEERING</option>
                        <option value="CIVIL ENGINEERING" id="civil">CIVIL ENGINEERING</option>
                        <option value="ELECTRICAL ENGINEERING" id="electrical">ELECTRICAL ENGINEERING</option>
                        <option value="MECHANICAL " id="mechanical">MECHANICAL ENGINEERING</option>
                    </select>

                    <button type="submit" value="SEARCH" id="search" name="search">SEARCH</button>

                </form>
            </div>

            <?php
            if (isset($_POST['search'])) {
                $dept = $_POST['branch'];
                if ($dept == "ALL") {
                    $sql = "SELECT * FROM circular ORDER BY `circular`.`c_date` DESC;";
                } else {
                    $sql = "SELECT * FROM circular where c_dept = '$dept' ORDER BY `circular`.`c_date` DESC;";
                }
                $res = mysqli_query($conn, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?>
                        <div class="circular_viewer">
                            <div class="box">
                                <div class="header">
                                    <h4>
                                        <a href=" <?php echo $row['c_href']; ?>" target="_blank">
                                            <?php echo $row['c_name']; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div class="date">
                                    <h4>
                                        <?php echo $row['c_date']; ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>

        </div>
        <div class="imp_links">
            <div class="links_header">
                <h2>IMPORTANT LINKS</h2>
            </div>
            <div class="links_body"><br>
                <p>
                    <a href="https://gtu.ac.in/" target="_blank">[1.] Gujarat Technological University<br></a>
                </p>
                <p>
                    <a href="https://dte.gujarat.gov.in/" target="_blank">[2.] Directorate of Technical Education DTE,
                        Gandhinagar<br></a>
                </p>
                <p>
                    <a href="http://acpdc.co.in/" target="_blank">[3.] Admission Committee ACPDC (For Diploma
                        Admission)<br></a>
                </p>
                <p>
                    <a href="https://www.eduqfix.com/PayDirect/#/student/pay/wtldj2los3A4rE42PbWuPkYCHxT1lLblPFFbybo1J71g2K8eflLA3ccWFp5hOuNj/1707"
                        target="_blank">[4.] College Fee-Payment<br></a>
                </p>
                <p>
                    <a href="https://www.nbaind.org/" target="_blank">[5.] National Board of Accreditation<br></a>
                </p>
                <p>
                    <a href="https://www.aicte-india.org/" target="_blank">[6.] All India Council for Technical
                        Education
                        (AICTE)</a><br>
                </p>
                <p>
                    <a href="https://www.eduqfix.com/PayDirect/#/student/pay/wtldj2los3A4rE42PbWuPkYCHxT1lLblPFFbybo1J71g2K8eflLA3ccWFp5hOuNj/1707"
                        target="_blank">[7.] Hostel Fee link - Click Here</a><br>
                </p>
                <br>
            </div>

        </div>
    </div>
    <?php
    include('..\footer.php');
    ?>
</body>

</html>