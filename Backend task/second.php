<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		label{
			font-weight: bold;
		}
	</style>
</head>
<body>
	


	<div class="container-fluid">
		<div class="row bg-success">
			<div class="col-md-12">
				<h2 class="text-center text-white p-4">Url Form</h2>
			</div>
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-4">
				<div class="card shadow-lg">
					<div class="card-body border-0">
						<form action="third.php" method="POST">
							<label for="">Url :</label>
							<div class="form-group">
								<input type="text" name="url" class="form-control">
							</div>
							<div class="form-group ">
								<button  class="btn btn-block btn-primary" name="data">Submit</button>
							</div>
						</form>
						<div></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		session_start();
		if(isset($_POST['data'])){
			$url = $_POST['url'];
			$data=file_get_contents($url);
			$_SESSION['url']=$url;
			$_SESSION['data']=$data;
			header('location: third.php');
		}
	?>  
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>