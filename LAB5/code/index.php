<?php
// Подключение к серверу MySQL
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['category']);
    $description = $mysqli->real_escape_string($_POST['description']);

    $query = "INSERT INTO adb (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $mysqli->query($query);
}

// Получение всех объявлений
$adbs = [];
if ($result = $mysqli->query('SELECT * FROM adb ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $adbs[] = $row;
    }
    $result->close();
}

// Закрытие соединения
$mysqli->close();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab_5</title>
</head>
<body>
    <div id="form">
    <form action="index.php" method="post">
        <label for="email">Email</label>
        <input type="email" name = "email" required>

        <label for="category">Category</label>
        <select name="category">
            <option value="cars">Cars</option>
            <option value="skins">Skins</option>
        </select>

        <label for="title">Title</label>
        <input type="text" name = "title" required><br/>
        <label for="description">Description</label><br/>
        <textarea name="description" rows="1" cols = "25"></textarea><br/>

        <input type="submit" value="Save">
    </form>
    </div>
    <div id="table">
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($adbs as $adb):
                echo "<tr>";
                echo "<td>" . ($adb['email']) . "</td>";
                echo "<td>" . ($adb['title']) . "</td>";
                echo "<td>" . ($adb['description']) . "</td>";
                echo "<td>" . ($adb['category']) . "</td>";
                echo "</tr>";
            endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>