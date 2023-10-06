<?php 
class Book{
    private $id;
    private $nameBook;
    private $yearPublish;
    private $idAuthor;

    public function __construct($id, $nameBook, $yearPublish, $idAuthor){
        $this->id = $id;
        $this->nameBook = $nameBook;
        $this->yearPublish = $yearPublish;
        $this->idAuthor = $idAuthor;
    }

    public function getId(){
        return $this->id;
    }

    public function getNameBook(){
        return $this->nameBook;
    }

    public function getYearPublish(){
        return $this->yearPublish;
    }

    public function getIdAuthor(){
        return $this->idAuthor;
    }
    
    public function setNameBook($name){
        $this->nameBook = $name;
    }

    public function setYearPublish($year){
        $this->yearPublish = $year;
    }

}

?>