<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\BookManager;

$bookManager = new BookManager();
$id = filter_input(INPUT_GET, 'id');
$$bookManager->deleteBook($id);


header('Location: ./index.php');
exit();
?>
