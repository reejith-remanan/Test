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
                        <form method="POST" action="action.php">
                            
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" name="email" placeholder="Your Email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
							 <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" name="password" id="email" placeholder="password" required="required" >
                                <p class="help-block text-danger"></p>
                            </div>
                          
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" name="submit" type="submit" >Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
				
<?php
include("footer.php");

?>