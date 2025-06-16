
<?php
session_start();
$conn = new mysqli("localhost", "root", "", "moz_clinic");
if (!isset($_SESSION["doctor"])) {
    header("Location: login.php");
    exit();
}
$doctor = $_SESSION["doctor"];
echo "<h1>Кабінет лікаря $doctor</h1>";
$result = $conn->query("SELECT * FROM appointments WHERE doctor='$doctor'");
echo "<table border='1'><tr><th>Ім’я</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td></tr>";
}
echo "</table>";
?>
