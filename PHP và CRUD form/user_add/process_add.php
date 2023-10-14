<?php 
if(isset($_POST['sbmSave'])){
    $user=$_POST['user'];
    $email=$_POST['mail'];
    $pass1=$_POST['pass1'];


    try{
        $conn = new PDO("mysql:host=localhost;dbname=cse","root","");
        $sql_check = "SELECT * FROM users where username='$user' or email = '$email'";

        $start = $conn->prepare($sql_check);
        $start->execute();

        if($start->rowCount()>0){
            header("Location:.?error='Thong tin da ton tai'");
        }
        else{
            $pass_hard = password_hash($pass1, PASSWORD_DEFAULT);
            $sql_insert = "insert into users(username, email,pass) values('$user','$email','$pass_hard')";
            $start = $conn->prepare(($sql_insert));
            $start->execute();
            if($start->rowCount()>0){
                header("Location:/use_management/use_management.php?success=added");      
            }
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}

?>