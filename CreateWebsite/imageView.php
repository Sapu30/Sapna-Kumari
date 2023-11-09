<?php
    
	$servername = "localhost";
	$username = "root";
	$password = "kanika";
	$dbname = "mywebsite";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
    if(isset($_GET['image_id'])) {
        $sql = "SELECT imageType,imageData FROM personal_info WHERE pid=" . $_GET['image_id'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["imageData"];
	}
	mysqli_close($conn);
?>