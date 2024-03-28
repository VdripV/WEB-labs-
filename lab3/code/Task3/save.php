<?php

function redirectToHome()
{
    header("Location: files.php");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    redirectToHome();
}

$category = $_POST['category'];
$email = $_POST['email'];
$title = $_POST['title'];
$desc = $_POST['description'];
$category_folder = "./categories/$category";
$file_path = "$category_folder/$title.txt";
$content = "$email\n$title\n$desc";
file_put_contents($file_path, $content);
redirectToHome();
?>
