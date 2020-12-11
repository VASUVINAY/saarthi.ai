<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
	<style>
		label{
			font-weight: bold;
		}
		.card{
			border-radius: 15px;
		}
	</style>
</head>
<body>

	<div class="container-fluid">
		<div class="row bg-success">
			<div class="col-md-12">
				<h2 class="ml-5 text-white p-4">Sarthi Ai</h2>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-4">
				<div class="card shadow-lg">
					<div class="card-header bg-white">
						<h3 class="card-title pl-4">Login</h3>
					</div>
					<div class="card-body border-0">
						<form action="#" method="POST">
							<label for="">Email :</label>
							<div class="form-group">
								<input type="text" name="email" class="form-control">
							</div>
							<label for="">Password :</label>
							<div class="form-group">
								<input type="text" name="password" class="form-control">
							</div>
							<div class="form-group ">
								<button class="btn btn-block btn-primary font-weight-bold" name="login">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if (isset($_POST['login'])) {
			$email=$_POST['email'];
			$password=$_POST['password'];

			if ($email === 'kkmaurya.0095@gmail.com' && $password==='Kishan@1234') {
				 ?>
                    <script>

                      sweetAlert(
                        {
                          title: "Hurray Successfull loggedin",
                          text: "Just wait for a Second",
                          type: "success"
                        },
                        function () {
                          window.location.href = 'second.php';
                        });

                  </script>
                <?php
			}else{
				 ?>
                <script>
                      sweetAlert(
                        {
                          title: "Somthing went wrong..!",
                          text: "Just wait for a Second",
                          type: "error"
                        },
                        function () {
                          window.location.href = 'index.php';
                        });
                  </script>
              <?php
			}
		}


	?>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>