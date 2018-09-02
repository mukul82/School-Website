<?php
$servername = "localhost";
$username = "padhjnja_mukul";
$password = "mukul@123";
$dbname = "padhjnja_mukul";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$repass = $_POST['message'];

$sql  = "INSERT INTO contact_mukul VALUES('$name','$email','$repass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$from = 'mukulsrivastava82@gmail.com';
$to = 'mukulsrivastava82@gmail.com';
$subject = 'Contact Details';

$message = $name."\n".$email."\n".$repass;

$status = mail($to, $subject, $message);

if($status)
{ 
    echo '<p>Your mail has been sent!</p>';
} else { 
    echo '<p>Something went wrong, Please try again!</p>'.$status; 
}

?>
