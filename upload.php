<!DOCTYPE html>
<html>
<head>
	<title>uploadpic</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<br>
		<h1 class="text-white bg-danger text- center" >UPLOAD PIC</h1>
	 <div class="col-lg-8 m-auto d-block">
		<form action="picupload.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="file">image upload:</label>
				<input type="file" name="file" id="file" class="form-control">
				
			</div>

			<input type="submit" name="submit"value="submit" class="btn btn-success">
		</form>
	  </div>
	</div>

</body>
</html>