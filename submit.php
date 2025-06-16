
<?php
$conn = new mysqli("localhost", "root", "", "moz_clinic");
$name = $_POST["patient_name"];
$email = $_POST["patient_email"];
$doctor = $_POST["doctor"];
$conn->query("INSERT INTO appointments (name, email, doctor) VALUES ('$name', '$email', '$doctor')");
echo "Вас записано до лікаря $doctor.";
?>
