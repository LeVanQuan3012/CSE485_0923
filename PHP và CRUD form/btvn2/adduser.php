<?php
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
        $response = "Username or Email existed";
        header("Location:users.add.php?response = $response");
    }
    else{
        $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO users(username, email,pass) values ('$user','$email','$pass_hash')";
        $start = $conn->prepare($sql_insert);
        $start->execute();
        $rowCount = $start->rowCount();
        if($rowCount >0){
            $response= "User Added";
            header("Location:users_mamagement.php?response = $response"); 
        }
    }
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>