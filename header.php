<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Encode+Sans+Condensed:wght@500&family=Gelasio:ital@1&display=swap"
        rel="stylesheet">    
</head>

<body>

<nav class="navbar">

        <div class="logo">
            <img src="..\pictures\KDP_LOGO.png">
        </div>
        <div class="header">
            <h3>K. D. POLYTECHNIC</h3>
        </div>

        <input type='checkbox' id='responsive-menu'>
        <ul id='menu'>
            <li><a href='..\Home\home.php'>Home</a></li>
            <li><a class='dropdown-arrow' href='#'>Department</a>
                <ul class='sub-menus'>
                    <li><a href='..\Campus\ComputerCampus.php'>Computer Eng.</a></li>
                    <li><a href='..\Campus\MechanicalCampus.php'>Mechanical Eng.</a></li>
                    <li><a href='..\Campus\CivilCampus.php'>Civil Eng.</a></li>
                    <li><a href='..\Campus\ElectricalCampus.php'>Electrical Eng.</a></li>
                    <li><a href='..\Campus\E&CCampus.php'>Elecronics & Communicatiion Engg.</a></li>
                    <li><a href='..\Campus\AppliedMechanicalCampus.php'>APPLIED MECHANICS</a></li>
                    <li><a href='..\Campus\GeneralCampus.php'>GENERAL</a></li>
                    <li><a href='..\Campus\CampusVisit.php'>CAMPUS VISIT</a></li>
                </ul>
            </li>
            <li><a class='dropdown-arrow' href='#'>Academic</a>
                <ul class='sub-menus'>
                    <li><a href="..\Academics\AcadmicCal.php">Academic Calender</a></li>
                    <li><a href="..\Academics\TimeTable.php">Time Table</a></li>
                    <li><a href="..\Academics\Exam.php">Exam Schedule</a></li>
                    <li><a href="..\Academics\Result.php">Result</a></li>
                    <li><a href="..\Academics\Mentoring.php">Mentoring</a></li>
                </ul>
            </li>
            <li><a class='dropdown-arrow' href='#'>Faculty</a>
                <ul class='sub-menus'>
                    <li><a href="..\Faculty\ComputerFaculty.php">Computer Eng.</a></li>
                    <li><a href="..\Faculty\MechanicalFaculty.php">Mechanical Eng.</a></li>
                    <li><a href="..\Faculty\CivilFaculty.php">Civil Eng.</a></li>
                    <li><a href="..\Faculty\ElectricalFaculty.php">Electrical Eng.</a></li>
                    <li><a href="..\Faculty\ECFaculty.php">Elecronics & Communicatiion Engg.</a></li>
                    <li><a href="..\Faculty\AppliedFaculty.php">APPLIED MECHANICS</a></li>
                    <li><a href="..\Faculty\GeneralFaculty.php">GENERAL</a></li>
                </ul>
            </li>
            <li><a href='..\Material spot\material.php'>Material</a></li>
            <li><a href='..\Circular\circular.php'>Circular</a></li>
            <li><a href='..\Student List\studentlist.php'>Student List</a></li>
            <li><a href="..\Contact us\Contactus.php">Contact Us</a></li>
        </ul>


        <div class="user">
            <a href="..\student\student.php"><i class="fa-solid fa-circle-user"></i></a>
        </div>

    </nav>

    <script src="https://kit.fontawesome.com/f317fffd23.js" crossorigin="anonymous"></script>

</body>

</html>