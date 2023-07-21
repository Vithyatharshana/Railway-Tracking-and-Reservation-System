<?php
	$Name = $_POST['Name'];
	$CCN = $_POST['CCN'];
	$Amount = $_POST['Amount'];
    $exp_month = $_POST['exp_month'];
	$exp_year = $_POST['exp_year'];
    $CVV = $_POST['CVV'];

	$conn = new mysqli('localhost','root','','railway');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into payment(Name, CCN, Amount, exp_month, exp_year, CVV) values('$Name','$CCN', '$Amount', '$exp_month', '$exp_year', '$CVV');";
		
		$conn->query($sql);
		$conn->close();
		echo "<script>
		window.location.href='bookings/index.html'
	</script>";
		
		$conn->close();
	}
?>