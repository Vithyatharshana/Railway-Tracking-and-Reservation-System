<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $age= $_POST['age'];
	$gender = $_POST['gender'];
	$qualifiation = $_POST['qualifiation'];
	$salary = $_POST['salary'];
	$message = $_POST['message'];

	$conn = new mysqli('localhost','root','','railway');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$sql = "insert into recmanager(name,email,phone,age,gender,qualification,salary,message) values('$name','$email','$phone','$age','$gender','$qualification','$salary','$message');";
		
		$conn->query($sql);
		$conn->close();
		echo "<script>
		window.location.href='Thank_You/index.html'
	</script>";
		
		$conn->close();
	}
?>