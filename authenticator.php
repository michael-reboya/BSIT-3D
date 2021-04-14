<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>SAMPLE AUTHENTICATOR CODE</h1>
<br>
<br>
<h2>
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sample_authenticator";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$useracc ="GAGO";
	$passacc ="GAGO";
	$sql = "SELECT U_ID FROM user where U_USERNAME = '" . $useracc . "' AND U_PASSWORD = '" . $passacc ."'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        // echo "<br> id: ". $row["U_ID"]. " - Name: ". $row["U_USERNAME"]. " " . $row["U_PASSWORD"] . "<br>";
	        $user_id = $row["U_ID"];

	    }
	} else {
	    echo "0 results";
	}

	$code=rand(100000,999999);

		echo "MADERYAKER CODE: ".$code ."<br>";
		echo "ETONG ANG MOTHERPAKING ID: ".$user_id;
	


	$sql = "INSERT INTO authenticator_code (A_ID, A_CODE, Created_At, Expiration, U_ID)
			VALUES (null,".$code.",'aweawe','aweawe',".$user_id.")";

			if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}


	$conn->close();




	 ?>



	<!-- <input class="form-control" type="text" name="A_code" placeholder="Authentication">
	<button class="form-control">SUBMIT</button>
 -->

</h2>
</body>
</html>

