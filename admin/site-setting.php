<?php 

include('includes/connection.php');
include('includes/allfunction.php');
include('includes/auth.php');

$sitesettingdata=selectdatabyid('site_setting','1');

if(isset($_POST['submit']))
{	
	$data=array(
	"phone"=>'"'.$_POST['phone'].'"',
	"email"=>'"'.$_POST['email'].'"',
	"fb"=>'"'.$_POST['fb'].'"',
	"wp"=>'"'.$_POST['wp'].'"',
	"insta"=>'"'.$_POST['insta'].'"',
	"address"=>'"'.$_POST['address'].'"',
	);
	
	update('site_setting',$data,'1');
  header('location:site-setting.php');
	
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Site Setting</title>
   
   <?php include_once('includes/css.php'); ?>
   
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
                    <h4 class="card-title">Site Setting</h4>
                 
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
			
					
                      <div class="form-group">
                        <label for="exampleInputName1">Primary Mobile</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="phone" placeholder="Primary Mobile" value="<?php echo $sitesettingdata['phone'];?>">
                      </div>
					  
					    <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" name="email" placeholder="Email" value="<?php echo $sitesettingdata['email'];?>">
                      </div>
					  
					   <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                     <textarea name="address"><?php echo $sitesettingdata['address'];?></textarea>
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputName1">Whatsapp Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="wp" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['wp'];?>">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Facebook Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="fb" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['fb'];?>">
                      </div>
					  
					    <div class="form-group">
                        <label for="exampleInputName1">Instagram Page Link</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="insta" placeholder="Facebook Page Link" value="<?php echo $sitesettingdata['insta'];?>">
                      </div>
					  
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
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