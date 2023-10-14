<?php
    /*$server = 'localhost';
    $user ='root';
    $pass = '';
    $database ='testphp'; 

    $conn = new mysqLi($server, $user, $pass, $database);

    if(!$conn){
        die('Khong the connect');
    }*/

    //code delete
    /*if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    try{
        $server = 'localhost';
        $user ='root';
        $pass = '';
        $database ='testphp'; 
        //B1
        $conn = new PDO("mysql:host=localhost;dbname=testphp",$user,$pass);
        //B2
        $start = $conn->prepare("select * from users");
        $start->execute();

        //B3
        $users = $start->fetchAll();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }*/
    
    /*try{
        $server = 'localhost';
        $user ='root';
        $pass = '';
        $database ='testphp'; 
        //B1
        $conn = new PDO("mysql:host=localhost;dbname=testphp",$user,$pass);
        //B2
        $start = $conn->prepare("select * from users");
        $start->execute();

        //B3
        $users = $start->fetchAll();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }*/

    try{
        $server = 'localhost';
        $user ='root';
        $pass = '';
        $database ='testphp'; 
        //B1
        $conn = new PDO("mysql:host=localhost;dbname=testphp",$user,$pass);
        
        //B2
        $sql = "DELETE FROM users WHERE id = $id";
        $start->$conn->prepare($sql);
        $start->execute();

        //B3
        $rowcount= $start->rowCount();
        if($rowcount > 0){
            $response = "Delete $rowCount row(s).";
            header("Location:users.management.php?response = $response");
        }; 
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

?>