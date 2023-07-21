<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$Phone = $_POST['Phone'];
    $Largebags = $_POST['Largebags'];
	$Mediumbags = $_POST['Mediumbags'];
	$Handbags = $_POST['Handbags'];
	$Date = $_POST['Date'];
    $Trainno = $_POST['Trainno'];
    $Age = $_POST['Age'];
	$Pickup = $_POST['Pickup'];
    $Dropoff = $_POST['Dropoff'];

	$conn = new mysqli('localhost','root','','Railway');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into coolie(Name, email, Phone, Largebags, Mediumbags, Handbags, Date, Trainno, Age, Pickup, Dropoff) values('$Name','$email', '$Phone', '$Largebags', '$Mediumbags', '$Handbags', '$Date', '$Trainno', '$Age', '$Pickup', '$Dropoff');";
		
		$conn->query($sql);
		$conn->close();
		echo "<script>
		window.location.href='#'
	</script>";
		
		$conn->close();
	}
?>