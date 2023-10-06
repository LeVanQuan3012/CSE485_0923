<?php 
require_once APP_ROOT.'/app/services/BookService.php';
class HomeController{
    public function index(){
        $bookservice = new BookService();
        $books = $bookservice->getAllBook();

        include APP_ROOT.'/app/views/home/index.php';
    }
}


?>