<?php
include("header.php");
?>


 <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                   <img src="img/carousel-2.jpg" width="800px">
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" name="name" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" name="email" placeholder="Your email" required="required" />
                                </div>
                               <div class="form-group">
                                    <input type="password" class="form-control border-0 p-4" name="password" placeholder="password" required="required" />
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" name="submit" type="submit">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

	<?php
	
include("connection.php");
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		
		
		
		$insert="INSERT INTO register(name,email,password) VALUES ('$name','$email','$password')";
		mysqli_query($con,$insert);
		//echo insert;
		
		echo "<script>
        alert('Sucessfully Registered');
        window.location='index.php';
        </script>";	
	}
	
	?>
		

<?php
include("footer.php");
?>