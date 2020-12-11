<?php
	session_start();
	$con=mysqli_connect('localhost','root','','backend');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
</head>
<body>
	<?php
		$url=$_SESSION['url'];
		$data=$_SESSION['data'];
		echo $url;
		echo $data;
		$Query="INSERT INTO `url_data` (url, content) VALUES ('$url','$data')";
		$res=mysqli_query($con,$Query);
		if ($res>0) {
			?>
                    <script>

                      sweetAlert(
                        {
                          title: "Hurray Data Inserted Successfully",
                          text: "Just wait for a Second",
                          type: "success"
                        },
                        function () {
                          window.location.href = 'second.php';
                        });

                  </script>
                <?php

                // unset($_SESSION['url']);
                // unset($_SESSION['data']);
		}
	?>  
</body>
</html>