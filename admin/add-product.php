<?php 
include('includes/connection.php');
include('includes/allfunction.php');
include('includes/auth.php');

if(isset($_POST['submit']))
{
	
		$filename=$_FILES['image']['name'];
		$tempname=$_FILES['image']['tmp_name'];
		move_uploaded_file($tempname,'uploads/'.$filename);
	

	
	date_default_timezone_set("Asia/Calcutta"); 
	
	$data=array(
	"cat_id"=>'"'.$_POST['catid'].'"',
	"image"=>'"'.$filename.'"',
	"status"=>'"'.$_POST['status'].'"',
	"added_date"=>'"'.date('Y-m-d h:i:s').'"'
	
	);
	
	insert('product',$data);
	header('location:all-product.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Project</title>
   
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
                    <h4 class="card-title">Add Project</h4>
                 
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
					
					 <div class="form-group">
                        <label for="exampleSelectGender">Select Category</label>
                        <select class="form-control" id="exampleSelectGender" name="catid">
                        <option>select category</option>  
						   <?php
					  $catdata=fetchalldata('productcat');
					  $i=1;
					  while($data=mysqli_fetch_array($catdata))
					  {?>
						  <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?></option>
					  <?php } ?>  
                        </select>
                      </div>
					
					 <div class="form-group">
                        <label>Image upload</label>
                        <input type="file" name="image" >
                       
                      </div>
					
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select class="form-control" id="exampleSelectGender" name="status">
                          <option value="1">Active</option>
                          <option value="0">Inactive</option>
                        </select>
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