<body>
  <h2>書籍を登録</h2>

  <form method="post" action="./store.php">

    <div>
      <label for="name">タイトル
        <input type="text" name="title" placeholder="タイトル">
      </label>
    </div>

    <div>
      <label for="content">感想
        <input type="textarea" name="content" placeholder="感想">
      </label>
    </div>

    <button type="submit">登録</button>

  </form>
</body>