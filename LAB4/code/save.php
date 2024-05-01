<?php
require __DIR__ . '/vendor/autoload.php';

$client = new \Google_Client();
$client->setApplicationName('lab4');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$path = __DIR__ . '/lab4-421920-d9f1d637c34f.json';
$client->setAuthConfig($path);

$service = new Google\Service\Sheets($client);

$spreadsheetId = '1Q7ie5i-S9XOGWQ6_QgKGi7pYQBH5NLUKRsU4RstVjSY';

$email = $_POST["email"];
$category = $_POST["category"];
$title = $_POST["title"];
$description = $_POST['description'];

$values = [
    [$email, $category, $title, $description]
];

$range = 'lab4' . '!A:D';

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);
$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

header('Location: index.php');
exit();
?>