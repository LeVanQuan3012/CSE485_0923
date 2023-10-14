<?php
if(isset($_GET['id'])){

    $id = $_GET['id'];

    try{
        $conn = new PDO("mysql:host=localhost;dbname=cse","root","");
        $sql_delete = "DELETE FROM users WHERE userid = $id";
        $start = $conn->prepare($sql_delete);
        $start->execute();

        if($start->rowCount() > 0){
            header("Location:/use_management/use_management.php?success=deleted");
        }
        else{
            echo "Loi";
        }
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    
}


?>