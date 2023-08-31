<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\BookManager;

$bookManager = new BookManager();
$pages = $bookManager->fetchAllBooks();

foreach ($pages as $key => $value) {
    $standard_key_array[$key] = $value['created_at'];
}
if(!empty($pages)){
  array_multisort($standard_key_array, SORT_DESC, $pages);
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./main.js" defer></script>
    <link rel="stylesheet" href="./style.css">
</head>
  <body>
    <header class="header">
      <a href="./create.php" class="new_blog">書籍を追加</a>
    </header>
  <div>
    <table border="1">
      <tr>
        <th>タイトル</th>
        <th>感想</th>
        <th>作成日時</th>
        <th>編集</th>
        <th>削除</th>
      </tr>

      <?php foreach ($pages as $page): ?>
        <tr>
          <td><?php echo $page['title']; ?></td>
          <td><?php echo $page['impressions']; ?></td>
          <td><?php echo $page['created_at']; ?></td>
          <td><a href="./edit.php?id=<?php echo $page['id']; ?>">編集</a></td>
          <td><a href="./delete.php?id=<?php echo $page['id']; ?>">削除</a></td>
        </tr>
      <?php endforeach; ?>

    </table>
  </div>

</body>