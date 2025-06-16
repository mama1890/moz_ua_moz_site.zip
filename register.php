
<?php
$conn = new mysqli("localhost", "root", "", "moz_clinic");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $conn->query("INSERT INTO doctors (username, password) VALUES ('$username', '$password')");
    echo "Лікаря зареєстровано.";
}
?>
<form method="POST">
    <input name="username" placeholder="Логін"><br>
    <input name="password" type="password" placeholder="Пароль"><br>
    <button type="submit">Зареєструвати</button>
</form>
