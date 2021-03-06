<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Ea$yBid | Upload Your Product</title>

		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/fileinput.css" rel="stylesheet">
	</head>
	<?php include("../settings/core_ini.php"); ?>
	<body style = "padding-top: 50px; padding-bottom: 150px;">
	     <?php require_once("../controller/selleruploadcontroller.php");isLoggedIn();?>
		<br><br>

		<div class = "container">
      <div class="panel panel-default col-md-4 col-md-offset-4">
        <div class="panel-body">
					<form method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
					    <label for="iName">Item Name:</label>
					    <input class="form-control" type="text" name="iName" id="iName" value="<?php if(!empty(isset($_POST["iName"]))) echo $_POST["iName"]; ?>">
					  </div>
						<div class="form-group">
							<label for="file">To choose the image of the item to upload check below:</label>
							<input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple/>
							<label for="file" name="label" class ="btn btn-block btn-primary"><span>Choose a File</span></label>
					  </div>
						<div class="form-group">
					    <label for="description">Add a description of the Item here:</label>
					    <textarea name="description" id="description" rows="4" cols="40" value="<?php if(!empty($_POST["description"])) echo $_POST["description"]; ?>"></textarea>
					  </div>
						<div class="form-group">
					    <label for="start">When do you want the bid to start:</label>
					    <input type="datetime-local" name="start" id="start" value="<?php if(!empty($_POST["start"])) echo $_POST["start"];?>"/>
					  </div>
						<div class="form-group">
					    <label for="end">When do you want the bid to end:</label>
					    <input type="datetime-local" name="end" id="end" value="<?php if(!empty($_POST["end"])) echo $_POST["end"];?>"/>
					  </div>
						<div class="form-group">
					    <label for="conditions">Select the Item's Condition:</label>
					    <select class="form-control" name="condition" id="conditions">
								<option value="" disabled selected>Please Choose a Condition...</option>
								<option value="1"<?php if(isset($_POST["condition"])&& $_POST["condition"]=="1") echo ("selected");?>>New</option>
								<option value="2"<?php if(isset($_POST["condition"])&& $_POST["condition"]=="2") echo ("selected");?>>Slightly Used</option>
								<option value="3"<?php if(isset($_POST["condition"])&& $_POST["condition"]=="3") echo ("selected");?>>Collectors</option>
						</select>
					  </div>
						<div class="form-group">
					    <label for="basePrice">Input the Base Price:</label>
					    <input class="form-control" type="text" name="basePrice" id="basePrice" value="<?php if(!empty(isset($_POST["basePrice"]))) echo $_POST["basePrice"]?>">
					  </div>
						<div class="form-group text-center">
							<button type="submit" name="upload" class="btn btn-primary">Upload Item</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!--Footer-->
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
        <p></p>
        <p class="text-center" style = "color: #fff">Time is a-running</p>
      </div>
    </nav>

		<!--javascript-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/inputfile.js"></script>
	</body>
</html>
