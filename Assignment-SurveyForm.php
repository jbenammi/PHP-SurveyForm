<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jonathan Ben-Ammi">
	<title>Survey Form</title>
	<meta name="description" content="This is a PHP assignment for Coding Dojo ">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<style type="text/css">
	* {
		padding: 0px;
		margin: 0%;
		font-family: arial, sans-serif;
		font-size: 1.1rem;
	}
	#wrapper {
		width: 90%;
		margin: 0% auto;
	}
	form {
		border: 3px solid black;
		width: 60%;
		padding: 10px;
		margin: 5% auto;
		box-shadow: 10px 10px 10px blue;
		border-radius: 10px;
	}
	.commentlabel {
		width: 100%;
	}
	textarea {
		width: 100%;
		height: 100px;
		border-radius: 5px;
	}
	.text, .select, label {
		width: 48%;
		display: inline-block;
		border-radius: 5px;
	}
	.section, .subButton {
		padding: 5px;
	}
	.subButton {
		background: blue;
		color: white;
		border: 1px solid black;
		box-shadow: 5px 5px 5px #888888;
		margin-left: 80%;
		width: 20%;
		border-radius: 5px;
	}

</style>
</head>
<body>
<div id="wrapper">

<form action="Assignment-SurveyFormResult.php" method="get">
	<div class="section">
		<label for="name">Your Name:</label>
		<input class="text" type="text" placeholder="Your Name" name="name" />
	</div>
	<div class="section">
	<label for="location">Dojo Location:</label>
	<select class="select" name="location">
		<option>Seattle</option>	
		<option>San Diego</option>
		<option>Dallas</option>
		<option>Chicago</option>
		<option>Washington DC</option>
		<option>Los Angeles</option>
	</select>
	</div>
	<div class="section">
	<label for="language">Favorite Language:</label>
	<select class="select" name="language">
		<option>Javascript</option>	
		<option>PHP</option>
		<option>HTML</option>
		<option>CSS</option>
		<option>NODE</option>
		<option>Angular</option>
	</select>
	</div>
	<div class="section">
	<label class="commentlabel" for="language">Comment (optional):</label>
	<textarea name="comments"></textarea>
	</div>
	<input type="submit" class="subButton" value="Submit"></input>
</form>
</div>
</body>
</html>