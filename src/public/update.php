<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\BookManager;

$id = filter_input(INPUT_POST, 'id');
$title = filter_input(INPUT_POST, 'title');
$impressions = filter_input(INPUT_POST, 'impressions');
// var_dump($title);
// var_dump($impressions);
// die;
if (!empty($title) && !empty($impressions)) {
    $bookManager = new BookManager();
    $bookManager->updateBook($id,$title,$impressions);

    header('Location: ./index.php');
    exit();
}
$error = 'タイトルまたは本文が入力されていません';


?>

<body>
  <div>
    <p><?php echo $error . "\n"; ?></p>
    <a href="./index.php">
        <p>トップページへ</p>
    </a>
  </div>
</body>
