<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <label for="">Ngay</label>
        <select name="" id="">
            <?php
                $month = 2;
                if($month == 2){
                    for($i=1; $i<29; $i++){
                        //echo "<option value='$i'> $i</option>";
            ?>

            <option value="<?php echo $i;?>"> <?php echo $i?> </option>
            <?php 
                    }
                }
            ?>
        </select>
    </form>
</body>

</html>