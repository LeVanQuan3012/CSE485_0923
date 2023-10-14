<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try{
            $conn = new PDO("mysql:host=localhost;dbname=cse","root","");
            $sql = "SELECT * FROM users WHERE userid = $id";
            $user = $conn->prepare($sql);
            $user = $start->execute();

            if($user->rowCount() > 0){
                $user->fetch();
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    

?>