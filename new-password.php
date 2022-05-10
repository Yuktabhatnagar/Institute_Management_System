<?php
include 'database/controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password | Portal</title>
    <?php include ('header/link.php')?>
</head>

<body>
    <?php include('header/navbar.php');?>
    <style>
        body{
            font-family: 'Inter', sans-serif;
        }
    </style>
    <style>
        .form-control:focus {
            border-color: #222222;
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(34, 34, 34, 0.6);}
    </style>


    <br><br><br>
    <br><br><br>


                <div class="container">
                <div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-sm-6 col-md-offset-3" style="border:4px solid #af1017;">
						<span id="error"></span>
				      	<div class="card">
                              <br>
					      		<div class="card-body">
                                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post" name="signup"  onSubmit="return valid();">

                                <h4 class="card-title mt-3 text-center">Set New Password </h4>
                                <p class="divider-text">
                                    <span class="bg-danger" style="border-radius: 25px;">Make sure your account is
                                        secure</span></p>	
                                <?php 
                    if(isset($_SESSION['info']))
                    {
                        ?>
                       
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
                    }?>

                                        <div class="row form-group">
				      					<label class="col-sm-4 col-form-label"><b>New Password</b></label>
				      					<div class="col-sm-8">
                                          <input type="password" name="password" id="password" data-toggle="tooltip" class="form-control"  required  />
					      				</div>
				      				</div>

                                      <div class="row form-group">
				      					<label class="col-sm-4 col-form-label"><b>Confirm Password</b></label>
				      					<div class="col-sm-8">
                                          <input type="password" name="cpassword" id="cpassword" data-toggle="tooltip" class="form-control"  required  />
					      				</div>
				      				</div>
				      				<p><input type="submit"  name="change-password" value="Change password" class="btn btn-success"></p>

				      			</div>
				      		</form>
				      	</div>
				    </div>
				</div>
                </div>

                <script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.cpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.cpassword.focus();
return false;
}
return true;
}
</script>

    <?php include('header/footer.php')?>


</body>
</html>

