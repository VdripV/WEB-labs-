<?php
session_start();

$surname = isset($_SESSION['surname']) ? $_SESSION['surname'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : '';

if (empty($surname) || empty($name) || empty($age)) {
    header('Location: formSNA.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные пользователя</title>
</head>
<body>
    <h1>Данные пользователя</h1>
    <p><strong>Фамилия:</strong> <?php echo $surname; ?></p>
    <p><strong>Имя:</strong> <?php echo $name; ?></p>
    <p><strong>Возраст:</strong> <?php echo $age; ?></p>
</body>
</html>
