<?php
    $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
?>
<!DOCTYPE html>
<html lang="en">

<style>
p {
    font-style: italic;
}

span.red {
    color: red;
    font-weight: bold;
}
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Màu <span class="red"><?php echo $arrs[0]; ?></span> là màu yêu thích của Anh, <span
            class="red"><?php echo $arrs[3]; ?></span> là màu
        yêu thích của Sơn,<span class="red"><?php echo $arrs[2]; ?></span> là màu yêu thích của Thắng, còn màu yêu thích
        của tôi là
        màu <span class="red"><?php echo $arrs[1]; ?></span>
    </p>
</body>

</html>