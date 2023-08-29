<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\LearningBook;

$learningBook = new LearningBook();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$book = $learningBook->findBookById($id);

?>

<body>
  
  <h2>編集</h2>

  <form method="post" action="./update.php">

    <input type="hidden" name="id" value=<?php echo $book['id']; ?>>

    <div>
      <label for="name">タイトル
        <input type="text" name="title" value=<?php echo $book['title']; ?>>
      </label>
    </div>

    <div>
      <label for="impressions">感想
        <input type="textarea" name="impressions" value=<?php echo $book[
            'impressions'
        ]; ?>>
      </label>
    </div>

    <button type="submit">更新</button>
    
  </form>

</body>