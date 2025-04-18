<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index2.php");
}
if(isset($_POST["submit"])){
/*  $name = $_POST[""];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];   */

        $name=$_POST['name'];
		$qua=$_POST['qualification'];
        $cat=$_POST['category'];
        $lan=$_POST['lan'];
        $exp=$_POST['experience'];
      //  $gender=$_POST['gender'];
        $phno=$_POST['number'];
        $em=$_POST['email'];
        $pwd=$_POST['pass'];
        $add=$_POST['address'];


$query = "INSERT INTO teareg VALUES('','$name','$qua','$cat','$lan','$exp','$phno','$em','$pwd','$add)";
if(mysqli_query($conn,$query))
{
    echo "<script> alert('Registration Successful'); </script>";
    
    header("Location: login3.php");
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
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputName" type="text" placeholder="Enter your  name" name="name" />
                                                        <label for="inputName">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputQualification" type="text" placeholder="Enter your Qualification"name="qualification" />
                                                        <label for="inputQualification">Qualification</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputlanguage" type="text" placeholder="Enter your Language" name="lan"/>
                                                        <label for="inputFirstName">Language of teaching</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputExperience" type="text" placeholder="Enter your Experience" name="experience"/>
                                                        <label for="inputLastName">Experience</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputcategory" type="text" placeholder="Enter your category" name="category"/>
                                                        <label for="inputcategory">category</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputphone" type="text" placeholder="Enter your number" name="number"/>
                                                        <label for="inputnumber">Phone number</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputEmail" type="text" placeholder="Enter your mail" name="email"/>
                                                        <label for="inputemail">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputpassword" type="password" placeholder="Enter your password" name="pass"/>
                                                        <label for="inputpassword">password</label>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row mb-3">
                                            <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputEmail" type="text" placeholder="Address" name="address"/>
                                                        <label for="inputemail">Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">                      
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <input type="radio" name="gender" id="dot-1" value="Male">
                                <span class="gender">Male</span>&nbsp;
                                
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <input type="radio" name="gender" id="dot-2" value="Female">
                                <span class="gender">Female</span>&nbsp;
                                
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <input type="radio" name="gender" id="dot-3" value="Prefer not to say">
                                <span class="gender">Prefer not to say</span> 
                                
                            </label>
                        </div>
                        </div>
                                                </div>
                        
                          </div>
                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" name="submit" value="Create Account" class="btn btn-primary btn-block" style="width: auto; background-color: #0d6efd; border-color: #0d6efd;"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login3.php">Have an account? Go to login</a></div>
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
    </body>
</html>
