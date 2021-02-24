<?php 

require_once "connect.php";

	if(isset($_FILES["fileToUpload"])) {

		$target_dir = "../../../Files/uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			// echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			// echo "File is not an image.";
			$uploadOk = 0;
		}

		// Allow certain file formats
		// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		// && $imageFileType != "gif" ) {
		//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		//   $uploadOk = 0;
		// }

		// Check if $uploadOk is set to 0 by an error
		// if ($uploadOk == 0) {
		//   echo "Sorry, your file was not uploaded.";
		// // if everything is ok, try to upload file
		// } else {
		  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry there was an error uploading your file(s) please contact Development Team";
		  }
		// }
	}
	$dbname = base64_decode($_COOKIE['tenantDB']);
	$topicCookie = base64_decode($_COOKIE['topicID']);

	$userCookie = base64_decode($_COOKIE['userID']);
	$content = $_POST['html_content'];
	$topicname = $_POST['file_name'];
		
	$sql = "call $dbname.Topic_Content_Update('$topicCookie', '$userCookie', '$content')";
	if (mysqli_query($conn, $sql)) {
		$id=mysqli_insert_id($conn);
		echo "Content Updated Successfully " ;
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}



	$conn->close();


 ?>