<?php
   $join=mysqli_connect("localhost","root","","cms");
   $id=$_REQUEST['id'];
   $result=mysqli_query($join,"SELECT * FROM teareg WHERE id='".$id."' ");
   $rows=mysqli_fetch_array($result);
?>
<html>
    <head>
    <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="bg-primary">
        <form action="update_teacher_table.php" method="POST">
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
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="name" value="<?php echo $rows['name'];?>"/>
                                                        <label for="inputFirstName">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name"name="qualification" value="<?php echo $rows['qualification'];?>" />
                                                        <label for="inputLastName">Qualification</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="lan_of_teaching" value="<?php echo $rows['lan_of_teaching'];?>"/>
                                                        <label for="inputFirstName">Language of teaching</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="experience" value="<?php echo $rows['experience'];?>"/>
                                                        <label for="inputLastName">Experience</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" name="category" value="<?php echo $rows['category'];?>" />
                                                        <label for="inputFirstName">category</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" name="phone_number" value="<?php echo $rows['phone_number'];?>"/>
                                                        <label for="inputLastName">Phone number</label>
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
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="password" value="<?php echo $rows['password'];?>"/>
                                                        <label for="inputPasswordConfirm">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                            <div class="form-floating mb-3 mb-md-0">
                                                        <textarea rows="4" cols="10" id="inputFirstName" class="form-control" name="address" value="<?php echo $rows['address'];?>"></textarea>
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

                                            <input name="id" type="hidden" id="id"; value="<?php echo $rows['id'];?>"                                   
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