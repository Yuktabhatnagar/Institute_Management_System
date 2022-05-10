<?php
include 'database/controller.php';
?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}

// else
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP ||Verification || Portal</title>
    <?php include ('header/link.php')?>
</head>
<body >
<?php include('header/navbar.php');?>
    <style>        
.form-control:focus {
	border-color:rgb(255,69,0);
	outline: 0;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6); }
    </style>


<br><br><br>



      <div class="container">
        <div class="col-md-6 col-md-offset-3">                   
            <div class="panel panel-light" style="margin-top: 10%;">
                <div class="panel-body">
                    <div class="col-md-12" style="border: 1px solid red;">
                    <div class="row" style="margin: 20px;">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
                    <h4 class="card-title mt-3 text-center" >Set your Password </h4>
                        <p class="divider-text">
                            <span class="bg-danger" style="border-radius: 25px;">Make sure your account is secure</span></p>
                            <br>

                            <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                            <div class="col-md-12">
                                <div class="form-group">
								<input type="number" name="otp" id="otp" maxlength="6"
								 data-toggle="tooltip" data-placement="Enter One Time Password "class="form-control"  required  />
                                    <small></small>

                                </div>
                            </div>

                            
                            <div class="col-md-12">
                            <div class="form-group">
							<input type="submit" value="Validate OTP" name="check-reset-otp" id="check-reset-otp">
                            </div> 
                            <!--- form group//----->
                            <p><i class="text-danger text-center">Please enter your Reset Code sent to this '<?php echo $email?>'</i></p>
                            </div>
                            </form>    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br> <br> <br>
      <!-- Site footer -->


      <?php include('header/footer.php')?>


</body>
</html>