<!DOCTYPE html>
<html>
<head>
	<title>Form Registration </title>
</head>
<body>

	<h1>Form Registration</h1>

	<?php 

		$FirstName = $_POST['fname'];
		$LastName = $_POST['lname'];
		$Gender = $_POST['gender'];
		$DoB = $_POST['DoB'];
		$Religion = $_POST['Religion'];
		$Present Address = $_POST['Present Address'];
		$Permanent Address = $_POST['Permanent Address'];
		$Phone = $_POST['Phone'];
		$Email = $_POST['email'];
		$Personal Website Link = $_POST['Personal Website Link '];
		$UserName = $_POST['uname'];
		$Password = $_POST['password'];

    	echo "Create account successful. $FirstName $LastName <br>";

	
       $arr1 = array('uname' => $UserName, 'password' => $Password, 'fname' => $FirstName, 'lname' => $LastName, 'gender'=> $Gender, 'DoB' => $DoB, 'Religion' => $Religion,'Present Address' => $Present Address,'Permanent Address' => $Permanent Address,'email' => $Email, 'Phone' => $Phone, 'Personal Website Link' => $Personal Website Link);
        $json_encoded_1 = json_encode($arr1);

$f1 = fopen("text.txt", "a");
fwrite($f1, $json_encoded_1 . "\n");
fclose($f1);
	?>

<a href="Login.html">Log In</a>
</body>
</html>