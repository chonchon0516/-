<?php

require_once __DIR__ . '/../vendor/autoload.php';
use App\LearningBook;


$impressions = filter_input(INPUT_POST, 'impressions');
$title = filter_input(INPUT_POST, 'title');


// [解説！]ガード節になっている
if (!empty($title) && !empty($impressions)) {
    $store = new LearningBook();
    $store->storeBook($title,$impressions);

    // [解説！]リダイレクト処理
    header('Location: ./index.php');
    // [解説！]リダイレクトしても処理が一番下まで続いてしまうので「exit」しておこう！！！
    exit();
}
$error = 'タイトルまたは感想が入力されていません';
?>

<body>
  <div>
    <p><?php echo $error . "\n"; ?></p>
    <a href="./index.php">
        <p>トップページへ</p>
    </a>
  </div>
</body>