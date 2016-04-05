<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Jonathan Ben-Ammi">
	<title>Information Page</title>
	<meta name="description" content="This is the second page to another Coding Dojo Assignment">
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
	#info {
		width: 60%;
		padding: 10px;
		border: 3px solid black;
		margin: 5% auto;
		box-shadow: 10px 10px 10px blue;
		border-radius: 10px;

	}
	ul {
		display: inline-block;
		vertical-align: top;
		width: 48%;
	}
	ul:nth-child(2) li{
		font-weight: bold;
	}
	ul li {
		list-style: none;
		padding: 5px 0px;
	}
	h2 {
		font-size: 1.5rem;
		color: blue;
	}
	a {
		width: 20%;
		text-decoration: none;
		background: blue;
		color: white;
		padding: 5px;
		box-shadow: 5px 5px 5px #888888;
		border: 1px solid black;
		display: inline-block;
		margin-left: 40%;
		text-align: center;
		border-radius: 5px;

	}
	p {
		display: block;
		width: 100%
	}
	.comments {
		height: 100px;
		width: 98%;
		border: 1px solid black;
		margin-bottom: 2%;
		padding: 5px;
		border-radius: 10px;

	}

</style>
</head>
<body>
	
<div id="wrapper">
	<div id="info">
	<h2>Submitted Information</h2>
	<ul>
		<li>Name:</li>
		<li>Dojo Location:</li>
		<li>Favorite Language:</li>
		<li>Comment(s):</li>
	</ul>
	<ul>
		<li><?= $_GET['name']; ?></li>
		<li><?= $_GET['location']; ?></li>
		<li><?= $_GET['language']; ?></li>
	</ul>
	<p class="comment_label"></p>
	<p class="comments"><?= $_GET['comments']; ?></p>
	<a href="Assignment-SurveyForm.php" target="_self" >Go Back!</a>
	</div>
</div>


</body>
</html>