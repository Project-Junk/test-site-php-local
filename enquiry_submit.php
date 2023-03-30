

		<?php
		$conn = mysqli_connect("localhost", "root", "", "enquiryproj");
		$lol = $conn->query("SELECT COUNT(enquiryid) FROM tbl_enquiry");
		while ($row = $lol->fetch_assoc()) {
			$lol2 = $row['COUNT(enquiryid)'] . "<br>";
		}
		$lol3 = $lol2 + 1;
		$name =  $_REQUEST['enquiry_person'];
		$orgname =  $_REQUEST['org_name'];
		$mobile = $_REQUEST['mobile_no'];
		$remarks = $_REQUEST['long_desc'];
		$servicename = $_REQUEST['service_type_name'];
		$serviceid = $conn->query("SELECT service_type_id FROM tbl_service WHERE service_type_name ='$servicename' ");


		while ($row = $serviceid->fetch_assoc()) {
			$serviceid2 = $row['service_type_id'] . "<br>";
		}

		// $sql = "INSERT INTO tbl_enquiry  VALUES ('$lol2', '$name',
		//     '$orgname','$mobile', '$serviceid2', '$remarks', '')";

		$statusMsg = '';
		if (isset($_REQUEST['submit'])) {



			// File upload configuration
			$targetDir = "test/uploads/";
			$allowTypes = array('jpg', 'png', 'jpeg', 'gif');

			$images_arr = array();
			foreach ($_FILES['images']['name'] as $key => $val) {
				$image_name = $_FILES['images']['name'][$key];
				$tmp_name 	= $_FILES['images']['tmp_name'][$key];
				$size 		= $_FILES['images']['size'][$key];
				$type 		= $_FILES['images']['type'][$key];
				$error 		= $_FILES['images']['error'][$key];

				// File upload path
				$fileName = basename($_FILES['images']['name'][$key]);
				$targetFilePath = $targetDir . $fileName;

				// Check whether file type is valid
				$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
				if (in_array($fileType, $allowTypes)) {
					// Store images on the server
					if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $targetFilePath)) {
						$images_arr[] = $targetFilePath;
					}
				}
			}
		}
		$sql = $conn->query("INSERT into tbl_enquiry (enquiryid, enquiry_person, org_name, mobile_no, service_type_id, remarks, file_name) VALUES ('$lol3', '$name',
            '$orgname','$mobile', '$serviceid2', '$remarks','" . $targetFilePath . "') ");

		if ($sql) {
			header('Location: enquiry.php');
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}






		?>


