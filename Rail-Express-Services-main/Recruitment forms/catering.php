<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$Phone = $_POST['Phone'];
    $Age= $_POST['Age'];
	$Gender = $_POST['Gender'];
	$Hrs = $_POST['Hrs'];
	

	$conn = new mysqli('localhost','root','','railway');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into catering(Name,email, Phone, Age, Gender,Hrs) values('$Name','$email', '$Phone', '$Age', '$Gender', '$Hrs');";
		
		$conn->query($sql);
		$conn->close();
		echo "<script>
		window.location.href='Thank_You/index.html'
	</script>";
		
		$conn->close();
	}
?>