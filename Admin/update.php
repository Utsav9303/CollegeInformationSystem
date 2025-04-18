<?php
   $join=mysqli_connect("localhost","root","","cms");
   $id=$_REQUEST['id'];
   $result=mysqli_query($join,"SELECT*FROM stureg WHERE id='$id' ");
   $rows=mysqli_fetch_array($result);
?>

<html>
    <head>
    <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="bg-primary">
        <form action="update_act.php" method="POST">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Account</h3></div>
                                    <div class="card-body">
                                        
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="firstname" value="<?php echo $rows['first_name'];?>"/>
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name"name="middlename" value="<?php echo $rows['middle_name'];?>" />
                                                        <label for="inputLastName">Middle name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="lastname" value="<?php echo $rows['last_name'];?>"/>
                                                        <label for="inputFirstName">Last name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="date" placeholder="Enter your last name" name="dateofbirth" value="<?php echo $rows['dob'];?>"/>
                                                        <label for="inputLastName">Date of Birth</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="phonenumber" value="<?php echo $rows['phone_number'];?>" />
                                                        <label for="inputFirstName">Phone number</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="parentsnumber" value="<?php echo $rows['parents_number'];?>"/>
                                                        <label for="inputLastName">Parents number</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="email"  value="<?php echo $rows['email'];?>"/>
                                                        <label for="inputFirstName">Email Address</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="pass" value="<?php echo $rows['password'];?>"/>
                                                        <label for="inputPasswordConfirm">Password</label>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row mb-3">
                                              
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <input type="radio" name="gender" id="dot-1" value="<?php echo $rows['gender'];?>"  >&nbsp;Male
                                <!--span class="gender">Male</!--span-->&nbsp;
                                
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <input type="radio" name="gender" id="dot-2" value="<?php echo $rows['gender'];?>">&nbsp;Female
                                <!--span class="gender">Female</!--span-->&nbsp;
                                
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <input type="radio" name="gender" id="dot-3" value="<?php echo $rows['gender'];?>">&nbsp;Prefer not to say
                                <!--span class="gender">Prefer not to say</!--span--> 
                                
                            </label>
                        </div>
                                            </div>

                                            <input name="id" type="hidden" id="id"; value="<?php echo $rows['id'];?>">
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><input type="submit" name="submit" value="Update" class="btn btn-primary btn-block"></div>
                                            </div>
                                      
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="admin_panel.php">Back to Panel</a></div>
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

        </form>
    </body>
</html>