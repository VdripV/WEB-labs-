<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
        'salary' => $_POST['salary'],
        'marriage_condition' => $_POST['marriage_condition']
    );

    $_SESSION['user_data'] = $data;
    header('Location: displayFormNASM.php');
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
    <form method="post">
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="age">Возраст:</label>
        <input type="number" name="age" id="age" required>
        <br>
        <label for="salary">Зарплата:</label>
        <input type="text" name="salary" id="salary" required>
        <br>
        <label for="marriage_condition">Состояние в браке:</label>
        <input type="text" name="marriage_condition" id="marriage_condition" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
