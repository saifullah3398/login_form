<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_details";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//get values
$user_name = $_POST['user_name'];
$email = $_POST['email'];
$password = $_POST['password'];

//insert in db
$sql = "INSERT INTO user_details (user_name, email, password)
VALUES ('".$user_name."', '".$email."', '".$password."')";

//store in json file
$details= array();
if (file_exists('user_details.json')){                   
    $details = json_decode(file_get_contents("user_details.json"), true);
}

$data['Name']=$user_name;
$data['Email']=  $email;
$data['Password']= $password;
array_push($details, $data);
if(file_exists('user_details.json')){
    file_put_contents("user_details.json",json_encode($details));
}

if ($conn->query($sql) === TRUE) {
  echo "Welcome, Hi ". $user_name . " your record created successfully...!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>