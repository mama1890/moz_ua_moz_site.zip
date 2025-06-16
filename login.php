
<?php
session_start();
$conn = new mysqli("localhost", "root", "", "moz_clinic");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = $conn->query("SELECT * FROM doctors WHERE username='$username' AND password='$password'");
    if ($result->num_rows > 0) {
        $_SESSION["doctor"] = $username;
        header("Location: cabinet.php");
    } else {
        echo "Невірний логін або пароль.";
    }
}
?>
<form method="POST">
    <input name="username" placeholder="Логін"><br>
    <input name="password" type="password" placeholder="Пароль"><br>
    <button type="submit">Увійти</button>
</form>
