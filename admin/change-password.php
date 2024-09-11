<?php 
include('includes/connection.php');
include('includes/allfunction.php');
include('includes/auth.php');

if(isset($_POST['submit']))
{

	$old=$_POST['old'];
	$new=$_POST['new'];
  $confirm=$_POST['confirm'];

  if( $new == $confirm )
  {
    $querry = " select * from login where password='$old' ";
    $result = mysqli_query($conn,$querry);
    $count = mysqli_num_rows($result);
    if($count>0)
    {
      $querry = " update login set password='$new' ";
      $result = mysqli_query($conn,$querry);
      echo "<alert>Password update successfully</alert>" ;
    }
    else
    {
      echo "<alert>Old password does not match </alert>" ; 
    }
   
  }

  else
  {
    echo "<alert>New password & Confirm password  does not match </alert>" ; 
  }



}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Change Password</title>
   
   <?php include_once('includes/css.php'); ?>

   <style>
        .password-container {
            margin: 20px;
        }
        .toggle-icon {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 8px;
        }
        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }
    </style>
   
  </head>
  <body>
    <div class="container-scroller">

   
   <?php include_once('includes/header.php'); ?>
   
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
       
	   <?php include_once('includes/sidebar.php'); ?>
	   
            </div>
            
            
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Change Password</h4>
                 
                    <form class="forms-sample" method="post">

                          <div class="password-container col-xl-4">
                            <div class="input-wrapper">
                                  <input class="form-control" type="password" id="password1" placeholder="Enter Current password" name="old">
                                  <span class="toggle-icon" data-toggle="#password1">
                                      <img src="https://img.icons8.com/ios-glyphs/30/000000/visible.png" alt="show/hide" id="icon1">
                                  </span>
                              </div>
                          </div>

                          <div class="password-container col-xl-4">
                              <div class="input-wrapper">
                                  <input class="form-control" type="password" id="password2" placeholder="Enter New password" name="new">
                                  <span class="toggle-icon" data-toggle="#password2">
                                      <img src="https://img.icons8.com/ios-glyphs/30/000000/visible.png" alt="show/hide" id="icon2">
                                  </span>
                              </div>
                          </div>

                          <div class="password-container col-xl-4">
                              <div class="input-wrapper">
                                  <input class="form-control" type="password" id="password3" placeholder="Enter Confirm password" name="confirm">
                                  <span class="toggle-icon" data-toggle="#password3">
                                      <img src="https://img.icons8.com/ios-glyphs/30/000000/visible.png" alt="show/hide" id="icon3">
                                  </span>
                              </div>
                          </div>
                     
                          <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Update Password</button>

                    </form>
                  </div>
                </div>
              </div>
            
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
				
		<?php include_once('includes/footer.php'); ?>		
				
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
   
   <?php include_once('includes/script.php'); ?>
   
  </body>
</html>