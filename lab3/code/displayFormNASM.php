<?php
session_start();

$user_data = isset($_SESSION['user_data']) ? $_SESSION['user_data'] : array();

if (empty($user_data)) {
    header('Location: formNASM.php');
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
    <ul>
        <?php foreach ($user_data as $key => $value) : ?>
            <li><strong><?php echo $key; ?>:</strong> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
