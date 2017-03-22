<!DOCTYPE html>
<html>
<head >
	<title>Welcome To Planners Galore!</title>
 
<link rel="stylesheet" href="css/mainStyles.css">
<!--script src="http://code.jquery.com/jquery-1.10.1.min.js"/-->

</head>

<body>	
		<a href="#home" class="left">Home</a><br><br>
		<a href="#browse" class="left">Browse</a><br><br>
		<a href="#view" class="left">Upload</a><br><br>
		<a href="#download" class="left">Download</a><br><br>
		<a href="#contacts" class="left">About</a>

<!--Home-->
	<div id="home">
		<div id="containerHome1">
			<div class="welcome">Welcome to</div>
			Planners Galore!<br/>
		</div>
	</div>

<!--Browse-->
	<div id="browse">
		<div id="containerHome" class="containerBrowse">
			Browse for the planner templates you like...
		</div>

		<div>
		<!--templates--> 
			<h3 class="template1">Monthly<br/><br/>
				<img src="images/Monthly_template.jpg" class="template">
			</h3>
			<h3 class="template2">Annual Notes<br/><br/>
				<img src="images/AnnualNotes_template.jpg" class="template">
			</h3>
			<h3 class='template3'>Event List<br/><br/>
				<img src="images/EventList_template.jpg" class="template">
			</h3>
			<h3 class='template4'>Personal Calendar<br/><br/>
				<img src="images/Personal_template.jpg" class="template">
			</h3>
			<h3 class='template5'>Tag Table<br/><br/>
				<img src="images/TagTable_template.jpg" class="template">
			</h3>

		<!--design picker-->
			<h6> Choose Theme:</br>
				<img src="images/dropbox_img.jpg" class="dropbox">
			</h6>

			<h6 class="colorP"> Choose Color Scheme:</br>
				<img src="images/dropbox_img.jpg" class="dropbox">
			</h6>
		</div>
	</div>

<!--Upload-->
	<div id="view">
		<div id="containerHome">
			...upload a picture...
		</div>
		<h3>Image Upload:<br/><br/>
		Select an image to upload:</h3><br/></br>

		<!--function for upload-->
		<form action="/php/upload.php" method="post" enctype="multipart/form-data">
			<input type="file" name="file" size="50"/>
			<br/>
			<input type="submit" value="Upload File"/>
		</form>
	</div>

<!--View and Download-->
	<div id="download">
		<div id="containerHome" >
			...and download your customized planner!
		</div>
		<h3 class="view">
			<img src="images/image_view.jpg" class="view">
		</h3>
	</div>

<!--Contacts-->
	<div id="contacts">
		<h3><br/>For more information, please contact this little girl: <br/><br/>
			<img src="images/me.jpg" class="me"><br/><br/>
			Vince Sayon<br/>
			vincesayon@gmail.com<br/><br/>
		</h3>
	</div>

	<!--script src="http://code.jquery.com/jquery-1.10.1.min.js"-->

</body>
</html>
<head></head>