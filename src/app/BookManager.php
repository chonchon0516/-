<?php
namespace App;
use PDO;

class BookManager
{
  private $pdo;

    public function __construct()
    {
      $dbUserName = 'root';
      $dbPassword = 'password';
      $this->pdo = new PDO(
          'mysql:host=mysql; dbname=booksmanagement; charset=utf8',
          $dbUserName,
          $dbPassword
      );
    }
    public function fetchAllBooks()
    {
        $sql = "SELECT * FROM books";
        $statement =$this->pdo->prepare($sql);
        $statement->execute();
        $pages = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $pages;
    }
    public function deleteBook($id)
    {
      $sql = "DELETE FROM books where id = $id";
      $statement = $this->pdo->prepare($sql);
      $statement->execute();
      
    }
    
    public function findBookById($id): array 
    {
      $sql = "SELECT * FROM books where id = $id";
      $statement = $this->pdo->prepare($sql);
      $statement->execute();
      $page = $statement->fetch(PDO::FETCH_ASSOC); 
      return $page;  
    }
    public function updateBook($id,$title,$impressions)
    {
      $sql = 'UPDATE books SET title=:title, impressions=:impressions WHERE id = :id';
      $statement = $this->pdo->prepare($sql);
      $statement->bindValue(':id', $id, PDO::PARAM_INT);
      $statement->bindValue(':title', $title, PDO::PARAM_STR);
      $statement->bindValue(':impressions', $impressions, PDO::PARAM_STR);
      $statement->execute();

    }
    public function storeBook($impressions,$title)
    {
      $sql = 'INSERT INTO `books`(`title`, `impressions`) VALUES(:title, :impressions)';
      $statement = $this->pdo->prepare($sql);
      $statement->bindValue(':title', $title, PDO::PARAM_STR);
      $statement->bindValue(':impressions', $impressions, PDO::PARAM_STR);
      $statement->execute();
    }
}
?>
