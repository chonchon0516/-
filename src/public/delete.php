<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\LearningBook;

$delete = new LearningBook();
$id = filter_input(INPUT_GET, 'id');
$delete->deleteBook($id);


header('Location: ./index.php');
exit();
?>
