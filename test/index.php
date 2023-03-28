<!--File uploading script -->
<?php include 'upload.php'; ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Upload Multiple Images And Store In Database Using PHP And MySQL by CodeAT21</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="App">
		<h1> Upload Multiple Images And Store In Database Using PHP And MySQL </h1>
		<div class="wrapper">
			<div class="form__field">
				<?php if(!empty($statusMsg)){ ?>
					<p class="status__msg"><?php echo $statusMsg; ?></p>
				<?php } ?>
				<form action="" method="post" enctype="multipart/form-data">
					<input type="file" name="images[]" class="form__field__img" multiple>
					<input type="submit" name="submit" value="Upload" class="btn__default">
				</form>
			</div>

	
</div>
</body>
</html>