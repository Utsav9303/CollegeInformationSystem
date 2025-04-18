<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
/*  $name = $_POST[""];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];   */

        
/*
  $duplicate = mysqli_query($conn, "SELECT * FROM stureg WHERE email = '$em'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$fn','$mn','$ln','$birth','$gen','$phno','$p_phno','$em','$pwd')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Registration not  Successful'); </script>";
    }
  }
}   */
// Get form data
$id = $_POST['id'];
$img = $_POST['img'];
$name = $_POST['name'];
$enroll_no = $_POST['enroll_no'];
$department = $_POST['department'];
$sem = $_POST['sem'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$status = $_POST['status'];
$password=$_POST['password'];

$sql = "INSERT INTO student_info (id, img, name, enroll_no, department, sem, dob, email, mobile_no, status) VALUES ('$id', '$img', '$name', '$enroll_no', '$department', '$sem', '$dob', '$email', '$mobile_no', '$status')";
if(mysqli_query($conn,$sql))
{
    echo "<script> alert('Registration Successful'); </script>";
    
    header("Location: before_login.php");
}






$sql1 = "INSERT INTO login (user_id,email_id,password) VALUES ('$id','$email', '$password')";

if(mysqli_query($conn,$sql1))
{
    echo "<script> alert('Registration inserted Successful'); </script>";
    
    header("Location: before_login.php");
}
mysqli_close($conn);
}

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="styles2.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style>
            
        </style>
    </head>
    <body class="bgphoto">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputId" type="text" placeholder="Enter your ID" name="id" />
                                    <label for="inputId">ID</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputImg" type="file" name="imageFile" />
                                    <label for="inputImg">Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-7">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="name" />
                                    <label for="inputFirstName">Name</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-floating">
                                    <input class="form-control" id="inputEnrollNo" type="text" placeholder="Enter your enrollment number" name="enroll_no" />
                                    <label for="inputEnrollNo">Enrollment Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputDepartment" type="text" placeholder="Enter your department" name="department" />
                                    <label for="inputDepartment">Department</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputSem" type="text" placeholder="Enter your semester" name="sem" />
                                    <label for="inputSem">Semester</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputDob" type="date" placeholder="Enter your date of birth" name="dob" />
                                    <label for="inputDob">Date of Birth</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputEmail" type="email" placeholder="Enter your last name" name="email" />
                                    <label for="inputLastName">E-Mail</label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputMobile" type="text" placeholder="Enter your last name" name="mobile_no" />
                                    <label for="inputLastName">Mobile_No</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputStatus" type="text" placeholder="Enter your last name" name="status" />
                                    <label for="inputLastName">Status</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputPassword" type="password" placeholder="Enter Password" name="password" />
                                    <label for="inputDob">password</label>
                                </div>
                            </div>
                            
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" name="submit" value="Create Account" class="btn" style="width: auto;"></div> 
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="before_login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>





        <?php
include('config.php');

if (isset($_POST['submit'])) {
    if (isset($_FILES['imageFile'])) {
        if (($_FILES['imageFile']['type'] == "image/jpeg" || $_FILES['imageFile']['type'] == "image/png" || $_FILES['imageFile']['type'] == "image/gif")) {
            $source_file = $_FILES['imageFile']['tmp_name'];
            $dest_file = "images/" . date('dmYHis') . $_FILES['imageFile']['name'];

            if (file_exists($dest_file)) {
                echo "The file name already exists!!";
            } else {
                move_uploaded_file($source_file, $dest_file) or die("Error!!");
                if ($_FILES['imageFile']['error'] == 0) {
                    // Insert the file path and name into the database
                    $image_path = $dest_file;
                    $name = isset($_POST['name']) ? $_POST['name'] : '';

                    // Read the image data
                    // $image_data = file_get_contents($dest_file);
                    // $image_data = mysqli_real_escape_string($conn, $image_data);

                    $sql = "INSERT INTO student_info (img) VALUES ('$image_path')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<br/>" . "Image file uploaded successfully!" . "<br/>";
                    } else {
                        echo "Error inserting into database: " . mysqli_error($conn);
                    }
                }
            }
        } else {
            echo  "Invalid file extension! Please upload an image file (JPEG, PNG, GIF).";
        }
    }
}
?>



    </body>
</html>
