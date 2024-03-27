<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['age'];
    header('Location: display.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ФИВ</title>
</head>
<body>
    <form method="post">
        <label for="surname">Фамилия:</label>
        <input type="text" name="surname" id="surname" required>
        <br>
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="age">Возраст:</label>
        <input type="number" name="age" id="age" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
