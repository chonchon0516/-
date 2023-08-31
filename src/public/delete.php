<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\BookManager;

$delete = new BookManager();
$id = filter_input(INPUT_GET, 'id');
$delete->deleteBook($id);


header('Location: ./index.php');
exit();
?>
