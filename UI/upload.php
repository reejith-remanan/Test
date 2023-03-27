<?php
include("header.php");

?>
    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
               
                <h1>Login</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form method="POST" enctype="multipart/form-data" >
                            
                            <div class="control-group">
                                <input type="file" class="form-control border-0 p-4" id="email" name="image" placeholder="upload" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
							 
                          
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" name="submit" type="submit" >submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	include("connection.php");
	
	if(isset($_POST['submit']))
	{
		if($_FILES['image']['name'])
	{
		
   //to move image to our folder//
   
	move_uploaded_file($_FILES['image']['tmp_name'],"uploads/".$_FILES['image']['name']);
	
	$a=$_FILES['image']['name'];
		
		
		
		
		$insert="INSERT INTO upload (image) VALUES ('$a')";
		
		mysqli_query($con,$insert);
		//echo insert;

		
	echo "<script>
        alert('Sucessfully upload');
        window.location='upload.php';
        </script>";	
		}
	}
	
	
	?>
    <!-- Contact End -->
				
<?php
include("footer.php");

?>