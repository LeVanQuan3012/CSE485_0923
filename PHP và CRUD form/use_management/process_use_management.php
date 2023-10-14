<?php
    try{
        $conn = new PDO('mysql:host=localhost;dbname=cse',"root","");

        $sql_check = "select * from users";

        $start = $conn->prepare(($sql_check));
        $start->execute();

        $users = $start->fetchAll();
        foreach($users as $member){
?>
<tr>
        <td><?php echo $member[0] ?></td>
        <td><?php echo $member[1] ?></td>
        <td><?php echo $member[2] ?></td>
        <td><?php echo $member[3] ?></td>
        <td><?php  ?></td>
        <td>
            <a href="#"><i class="fa-solid fa-eye"></i></a>
            <a href="#"><i class="fa-solid fa-pen"></i></a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $member[0]; ?>"><i
                class="fa-sharp fa-solid fa-trash"></i></a>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal<?php echo $member[0];?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                        <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure delete id: <?php echo $member[0];?> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="/use_management/user_delete.php?id=<?php echo $member[0];?>" class=" btn btn-primary">OK</a>

                    </div>
                </div>
            </div>
        </div>
        </td>
        </tr>
<?php
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

?>