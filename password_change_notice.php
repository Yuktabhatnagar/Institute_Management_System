<?php
include 'database/controller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice for Password change</title>
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
					<div class="col-sm-6 col-md-offset-3" style="border:1px solid #af1017; background:#fff">
						<span id="error"></span>
				      	<div class="card">
                              <br>
					      		<div class="card-body">
                                  <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">

                                <h4 class="card-title mt-3 text-center">Password Change Notify </h4>
                                <p class="divider-text">
                                    <span class="bg-danger" style="border-radius: 25px;">Make sure your account is
                                        secure</span></p>	
										<?php 
										if(isset($_SESSION['info'])){
											?>
											<div class="alert alert-success text-center">
											<?php echo $_SESSION['info']; ?>
											</div>
											<?php
										}
										?>
				      				<p>	<a href="student-login.php" class="btn btn-warning" onclick="login()">
									  Login</a></p>

				      			</div>
				      		</form>
				      	</div>
				    </div>
				</div>
                </div>

    <?php include('header/footer.php')?>


</body>
</html>

