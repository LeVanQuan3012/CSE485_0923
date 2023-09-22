<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table,
th,
td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<body>
    <table>
        <tr>
            <th>Tên khóa học</th>
        </tr>
        <?php 
            $arrs = ['PHP', 'HTML', 'CSS', 'JS'];
            $size = count($arrs);
            for($i = 0; $i<$size; $i++){
        ?>
        <tr>
            <td>
                <?php
                    echo $arrs[$i];
                ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>

</html>