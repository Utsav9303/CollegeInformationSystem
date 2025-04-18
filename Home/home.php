<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="..\style.css">
    <link rel="stylesheet" href="..\Academics\Academic.css">
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
.body1 a{
    text-decoration: none;
    color: royalblue;
    text-align: center;
    margin-left: 520px;
    margin-right: 550px;
}
.body1 a:hover{
    color: red;
}

img {
  width: 100%;
  height: auto;
  display: block;
  object-fit: cover;
}

.hexagon-gallery {
  margin: auto;
  margin-top: 50px;
  max-width: 1000px;
  display: grid;
  grid-template-columns: repeat(8, 1fr);
  grid-auto-rows: 200px;
  grid-gap: 14px;
  padding-bottom: 50px;
}

.hex {
  display: flex;
  position: relative;
  width: 230px;
  height: 255px;
  background-color: #424242;
  -webkit-clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
}
.hex:hover{
    transform: translateY(-10px);
    box-shadow: 0 0 20px rgb(0,0,0,0.8);
}
 
a:link{text-decoration: none;}

.hex:first-child {
  grid-row-start: 1;
  grid-column: 2 / span 2;
}
.hex a h2{
  margin-top: 99px;
 text-decoration: none;
  color:whitesmoke;
}

.hex:nth-child(2) {
  grid-row-start: 1;
  grid-column: 4 / span 2;
}

.hex:nth-child(3) {
  grid-row-start: 1;
  grid-column: 6 / span 2;
}

.hex:nth-child(4) {
  grid-row-start: 2;
  grid-column: 1 / span 2;
}

.hex:nth-child(5) {
  grid-row-start: 2;
  grid-column: 3 / span 2;
}

.hex:nth-child(6) {
  grid-row-start: 2;
  grid-column: 5 / span 2;
}

.hex:nth-child(7) {
  grid-row-start: 2;
  grid-column: 7 / span 2;
}

.hex:nth-child(8) {
  grid-row-start: 3;
  grid-column: 2 / span 2;
}

.hex:nth-child(9) {
  grid-row-start: 3;
  grid-column: 4 / span 2;
}

.hex:nth-child(10) {
  grid-row-start: 3;
  grid-column: 6 / span 2;
}



        </style>
</head>

<body>

<?php
    include('..\header.php');
    ?>
    
    <div class="body">
        <div class="slider"></div>
        <br><br>
        <a href="..\circular\circular.php" style="font-size:35px; text-decoration:none; color:blue;">
        <marquee width="100%"
        direction="left"
        height="40px"
        style="background-color: #b9f3f3;">
        Click here for latest Circular
        </marquee></a>
        <div class="information">
            <div class="about">
                <div class="header">
                    <h3>About</h3>
                </div>
                <div class="text">
                    <p>KD Polytechnic, also known as Kilachand Devchand Polytechnic, was established in 1961 at Patan,
                        Gujarat. The institute offers diploma courses in 5 specialization and it is affiliated with
                        Gujarat Technological University, Ahmedabad. This polytechnic is a premier technical education
                        and training institute in the North Gujarat. The institute celebrates freedom of thought,
                        cultivates vision and encourages growth but also includes human values and concern for the
                        environment and the society.</p>
                </div>
            </div>
        </div>

        <div class="information">
            <div class="about">
                <div class="header">
                    <h3>Vision</h3>
                </div>
                <div class="text">
                    <p>To impart quality technical education and create an ethically sound class of well-trained youth
                        that can achieve opportunities in industries and serve the society.</p>
                </div>
            </div>
        </div>

        <div class="information">
            <div class="about">
                <div class="header">
                    <h3>Mission</h3>
                </div>
                <div class="text">
                    <ul>
                        <li>To develop well-equipped laboratories and good academic infrastructure.</li>
                        <li>To promote co-curricular and extra-curricular activities for over-all personality
                            development of the students.</li>
                        <li>To strengthen industry institute interaction.</li>
                        <li>To inculcate entrepreneurial skills.</li>
                        <li>To instill discipline and social awareness among students and enable them to deal with
                            practical problems in daily life.</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
    </div>
        <div class="body">
        
            <h1>Our courses</h1>
    </div>
    <div class="body" style="border-radius:25px; padding-top:30px; padding-bottom:20px;">
    <section class="hexagon-gallery">
      <div class="hex" style="background:url(https://www.shutterstock.com/image-vector/abstract-technology-concept-circuit-board-260nw-1798841890.jpg)">
        
        <center> <a href="..\Campus\ComputerCampus.php"> <h2>Computer Engineering</h2> </a></center>
      </div>
  <div class="hex" style= background:url(https://t4.ftcdn.net/jpg/04/55/66/57/360_F_455665730_z7c0yqkFcgdMrP8BpfvJMheDMmpMWptf.jpg)>
    <center><a href="..\Campus\MechanicalCampus.php"><h2> Mechanical engineering</h2></a></center> </div>
      <div class="hex" style= background:url(https://ggnindia.dronacharya.info/blog/wp-content/uploads/2021/05/Why-Choose-Electrical-and-Electronics-Engineering.jpg)>
        <center><a href="..\Campus\ElectricalCampus.php"><h2> Electrical engineering</h2></a></center></div>
      <div class="hex" style= "background:url(https://media.istockphoto.com/id/168386317/photo/architecture-blueprint.jpg?s=612x612&w=0&k=20&c=3xOq5UMomZtww1-c8HtK8pdPMdjNDf6S6fPaf1oWxBM=)">
      <center><a href="..\Campus\CivilCampus.php" style="margin-left:220px;"><h2> Civil engineering</h2></a></center></div>
      <div class="hex" style= background:url(https://c8.alamy.com/zooms/9/db453787d7d1471c917e8b0b8b950352/kj928c.jpg)>
      <center><a href="..\Campus\E&CCampus.php" ><h2>Elecronics & Communication Engineering</h2></a></center>
    </div>
      <div class="hex"style= background:url(https://www.hp.com/content/dam/sites/worldwide/printers/3d-printers/learning-center/19_digital-manufacturing-3d-printing/Digital%20manufacturing%20with%20HP%20Jet%20Fusion%203D%20Printing%20Solutions.jpg)>
      <center><a href="..\Campus\AppliedMechanicalCampus.php" style="margin-left:230px;"><h2>Applied Mechanics</h2></a></center></div>
      <div class="hex"style= background:url(https://www.shutterstock.com/image-vector/abstract-techno-background-vector-eps10-260nw-62366365.jpg)>
      <center><a href="..\Campus\GeneralCampus.php" style="margin-left:230px;"><h2>General Engineering</h2></a></center></div>
      
    </section>
    <br><br><br><br>
    </div>

       
    <div class="body">
        <h1>Important Website Link (Click to Open)</h1>
    </div>
    
    <div class="body1" style = font-size:25px><br>
        <a href="https://gtu.ac.in/" target="_blank">[1.] Gujarat Technological University<br></a>
        <a href="https://dte.gujarat.gov.in/" target="_blank">[2.] Directorate of Technical Education DTE, Gandhinagar<br></a>
        <a href="http://acpdc.co.in/" target="_blank">[3.] Admission Committee ACPDC (For Diploma Admission)<br></a>
        <a href="https://www.eduqfix.com/PayDirect/#/student/pay/wtldj2los3A4rE42PbWuPkYCHxT1lLblPFFbybo1J71g2K8eflLA3ccWFp5hOuNj/1707" target="_blank">[4.] College Fee-Payment<br></a>
        <a href="https://www.nbaind.org/" target="_blank">[5.] National Board of Accreditation<br></a>
        <a href="https://www.aicte-india.org/" target="_blank">[6.] All India Council for Technical Education (AICTE)</a><br>
        <a href="https://www.eduqfix.com/PayDirect/#/student/pay/wtldj2los3A4rE42PbWuPkYCHxT1lLblPFFbybo1J71g2K8eflLA3ccWFp5hOuNj/1707" target="_blank">[7.] Hostel Fee link - Click Here</a><br>
        <br>
    </div>
    <br>

    <?php
    include('..\footer.php');
    ?>

    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

</body>

</html>