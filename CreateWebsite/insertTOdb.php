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
	
	if (count($_FILES) > 0) {
		if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
			
			$f_name = $_POST["f_name"];
		//	$l_name = $_POST["l_name"];
			$imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
			$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
			$DOB = $_POST["DOB"];
			$Email=$_POST["Email"];
			$about=$_POST["about"];
			
			$allowedExts1 = array("pdf");
			$temp1 = explode(".", $_FILES["pdf_file"]["name"]);
			$extension1 = end($temp1);
			$upload_pdf1=$_FILES["pdf_file"]["name"];
			move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"uploads/pdf/" . $_FILES["pdf_file"]["name"]);
			
			
			
	/*		$fb = $_POST["fb"];
			$in = $_POST["in"];
			$twitter = $_POST["twitter"];
			$github = $_POST["github"];
			$insta = $_POST["insta"];*/
			
			$html=$_POST["html"];
			$css=$_POST["css"];
			$cpp=$_POST["cpp"];
			$java=$_POST["java"];
			$php=$_POST["php"];
			$python=$_POST["python"];
			
			$X_school = $_POST["X_school"];
			//$X_sMonth = $_POST["X_sMonth"];
			$X_startYear = $_POST["X_startYear"];
			//$X_eMonth = $_POST["X_eMonth"];
			$X_endYear = $_POST["X_endYear"];
			$cgpa = $_POST["cgpa"];
			
			$Xll_school = $_POST["Xll_school"];
			//$Xll_sMonth = $_POST["Xll_sMonth"];
			$Xll_startYear = $_POST["Xll_startYear"];
			//$Xll_eMonth = $_POST["Xll_eMonth"];
			$Xll_endYear = $_POST["Xll_endYear"];
			$per = $_POST["per"];
			
			$UG_course = $_POST["UG_course"];
			$UG_university = $_POST["UG_university"];
			//$UG_sMonth = $_POST["UG_sMonth"];
			$UG_startYear = $_POST["UG_startYear"];
			//$UG_eMonth = $_POST["UG_eMonth"];
			$UG_endYear = $_POST["UG_endYear"];
			
			$PG_course = $_POST["PG_course"];
			$PG_university = $_POST["PG_university"];
			//$PG_sMonth = $_POST["PG_sMonth"];
			$PG_startYear = $_POST["PG_startYear"];
			//$PG_eMonth = $_POST["PG_eMonth"];
			$PG_endYear = $_POST["PG_endYear"];
			
			$allowedExts2 = array("pdf","jpg","png","jpeg");
			$temp2 = explode(".", $_FILES["img1"]["name"]);
			$extension2 = end($temp2);
			$upload_pdf2=$_FILES["img1"]["name"];
			move_uploaded_file($_FILES["img1"]["tmp_name"],"uploads/pdf/" . $_FILES["img1"]["name"]);
			
			$allowedExts3 = array("pdf","jpg","png","jpeg");
			$temp3 = explode(".", $_FILES["img2"]["name"]);
			$extension3 = end($temp3);
			$upload_pdf3=$_FILES["img2"]["name"];
			move_uploaded_file($_FILES["img2"]["tmp_name"],"uploads/pdf/" . $_FILES["img2"]["name"]);
			
			$allowedExts4 = array("pdf","jpg","png","jpeg");
			$temp4 = explode(".", $_FILES["img3"]["name"]);
			$extension4 = end($temp4);
			$upload_pdf4=$_FILES["img3"]["name"];
			move_uploaded_file($_FILES["img3"]["tmp_name"],"uploads/pdf/" . $_FILES["img3"]["name"]);
			
			$allowedExts5 = array("pdf","jpg","png","jpeg");
			$temp5 = explode(".", $_FILES["img4"]["name"]);
			$extension5 = end($temp5);
			$upload_pdf5=$_FILES["img4"]["name"];
			move_uploaded_file($_FILES["img4"]["tmp_name"],"uploads/pdf/" . $_FILES["img4"]["name"]);
			
			$allowedExts6 = array("pdf","jpg","png","jpeg");
			$temp6 = explode(".", $_FILES["img5"]["name"]);
			$extension6 = end($temp6);
			$upload_pdf6=$_FILES["img5"]["name"];
			move_uploaded_file($_FILES["img5"]["tmp_name"],"uploads/pdf/" . $_FILES["img5"]["name"]);
			
			$allowedExts7 = array("pdf","jpg","png","jpeg");
			$temp7 = explode(".", $_FILES["img6"]["name"]);
			$extension7 = end($temp2);
			$upload_pdf7=$_FILES["img6"]["name"];
			move_uploaded_file($_FILES["img6"]["tmp_name"],"uploads/pdf/" . $_FILES["img6"]["name"]);
			
			
		
			
			$sql_1 = "INSERT INTO personal_info(f_name,imageType,imageData,DOB,email,about) VALUES('{$f_name}', '{$imageProperties['mime']}', '{$imgData}', '{$DOB}', '{$Email}', '{$about}')";
			$current_id_1 = mysqli_query($conn, $sql_1) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			
			$sql_3 = "SELECT pid FROM personal_info ORDER BY pid DESC"; 
			$current_id_3 = mysqli_query($conn, $sql_3) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			$row3 = mysqli_fetch_array($current_id_3);
			
			$pid = $row3["pid"];
			
			$sql=mysqli_query($conn,"INSERT INTO resume VALUES('{$upload_pdf1}','{$pid}')");
			
			$sql=mysqli_query($conn,"INSERT INTO interest VALUES('{$upload_pdf2}','{$upload_pdf3}','{$upload_pdf4}','{$upload_pdf5}','{$upload_pdf6}','{$upload_pdf7}','{$pid}')");
			
			
			/*$sql_4 = "INSERT INTO socialmedia_links VALUES('{$fb}','{$in}','{$twitter}','{$github}','{$insta}','{$pid}')"; 
			$current_id_4 = mysqli_query($conn, $sql_4) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));*/
	
			$sql_5 = "INSERT INTO skills VALUES('{$html}','{$css}','{$cpp}','{$java}','{$php}','{$python}','{$pid}')"; 
			$current_id_5 = mysqli_query($conn, $sql_5) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			
			$sql_6 = "INSERT INTO Xth VALUES('{$X_school}','{$X_startYear}','{$X_endYear}','{$cgpa}','{$pid}')"; 
			$current_id_6 = mysqli_query($conn, $sql_6) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			
			$sql_7 = "INSERT INTO Xllth VALUES('{$Xll_school}','{$Xll_startYear}','{$Xll_endYear}','{$per}','{$pid}')"; 
			$current_id_7 = mysqli_query($conn, $sql_7) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			
			$sql_8 = "INSERT INTO ug VALUES('{$UG_course}','{$UG_university}','{$UG_startYear}','{$UG_endYear}','{$pid}')"; 
			$current_id_8 = mysqli_query($conn, $sql_8) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			
			$sql_9 = "INSERT INTO pg VALUES('{$PG_course}','{$PG_university}','{$PG_startYear}','{$PG_endYear}','{$pid}')"; 
			$current_id_9 = mysqli_query($conn, $sql_9) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			
			if ( (isset($current_id_1)) && (isset($current_id_3)) && (isset($current_id_5)) && (isset($current_id_6)) ) {
				header("Location: YourPage.php");
            }
		}
    }
?>