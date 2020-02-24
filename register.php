<?php 
require_once 'conn.php';

	if (isset($_POST["Token"])) {
		
		   $_uv_Token=$_POST["Token"];

		   $q="INSERT INTO users (Token) VALUES ( '$_uv_Token') "
              ." ON DUPLICATE KEY UPDATE Token = '$_uv_Token';";
              
      mysqli_query($conn,$q) or die(mysqli_error($conn));
      $result['success'] = "success"; 

	echo json_encode($result);

      mysqli_close($conn);

	}


 ?>

