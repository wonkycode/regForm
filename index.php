<?php
include("processForm.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registration Form</title>
    
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col" id="notification">
                    <?php echo $message_alert; ?>
                </div>
                <div class="regForm">
                    <h1>Register Here</h1>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullName" placeholder="Enter Full Name" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" class="form-control" name="age" placeholder="Enter Age" max="100" required>
                        </div>
                        
                        <div class="form-group">
                            <label>DOB</label>
                            <input type="date" class="form-control" name="dob" required>
                        </div>
                        
                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Male" required>
                                  <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Female" required>
                                  <label class="form-check-label">Female</label>
                                </div>
                              </div>
                            </div>
                        </fieldset>
                        
                        <div class="form-group">
                            <label>Designation</label>
                            <select class="form-control" name="designation" required>
                                <option>--Select--</option>
                                <option value="Student">Student</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Engineer">Engineer</option>
                                <option value="Scientist">Scientist</option>
                                <option value="Others" selected>Others</option>
                            </select>
                        </div>
                        
                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Languages Known</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="English" checked>
                                  <label class="form-check-label">English</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="French">
                                  <label class="form-check-label">French</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="German">
                                  <label class="form-check-label">German</label>
                                </div>
                              </div>
                            </div>
                        </fieldset>
                        
                        <div class="form-group">
                            <label>Bio</label>
                            <textarea class="form-control" rows="3" name="bio" placeholder="Write Something about yourself..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" maxlength="15" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Re-enter Password" maxlength="15" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      $(document).ready( function() {
        $('#notification').delay(3000).fadeOut();
      });
    </script>
  </body>
</html>