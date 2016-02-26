<?php
if($_POST){

	echo "<div id='full_name' style='border: 2px green solid'>" . $_POST['firstname'] . ' ' . $_POST['lastname'] . "</div>";
}

?>
<html>
<head>
	<title>This is the start page</title>
</head>
<body>
<h1>HOME</h1>

<form action="index.php" method="post">
	<label id="lbl_firstname">Your firstname:</label>
	<input type="text" id="firstname" name="firstname" />	

	<label id="lbl_lastname">Your lastname:</label>
	<input type="text" id="lastname" name="lastname" />

	<input type="submit" id="submit" name="submit_form" value="Send" />
</form>
<br><br><br>
<a href="index.php">DONE</a>
</body>
</html>
