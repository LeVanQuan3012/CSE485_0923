<?php
require_once APP_ROOT.'/app/models/Book.php';
class BookService{
    public function getAllBook(){
        try{
            $conn = new PDO('mysql:host=localhost;dbname=quanlythuvien', 'root', '');
            $sql = 'SELECT * FROM Sach';
            $start = $conn->query($sql);

            $books = [];
            while ($row = $start->fetch()) {
                $book = new Book($row['id'], $row['tenSach'], $row['namXuatBan'], $row['idTacGia']);
                $books[] = $book;
            }
            return $books;
        }
        catch(PDOException $e){
            return $books=[];
        }
    }
}

?>