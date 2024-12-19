<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "bus_pass_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO bus_pass_registration (name, dob, gender, email, phone, address, id_proof, route_from, route_to, duration) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $name, $dob, $gender, $email, $phone, $address, $id_proof, $route_from, $route_to, $duration);


$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$id_proof = $_POST['id'];
$route_from = $_POST['from'];
$route_to = $_POST['to'];
$duration = $_POST['duration'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
