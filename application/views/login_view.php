
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>
			<?php 
				if(isset($page_title)){
					echo $page_title;
				}else{
					echo 'Sabinco Pharma';
				}
			?>
		</title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class=""></div>
	

	<?php echo validation_errors(); ?>
	
	<?php echo form_open('verifylogin'); ?>
		<h5>Username</h5>
		<input type="text" name="username" value="" size="50" />
		
		<h5>Password</h5>
		<input type="password" name="password" value="" size="50" />
		
		<div><input type="submit" value="Submit" /></div>
	
	</form>

	</body>
</html>
