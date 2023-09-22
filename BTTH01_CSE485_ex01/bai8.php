<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
p {
    font-style: italic;
}
</style>

<body>
    <p>
        <?php
            $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
            $size = count($array);
            $sizemax = strlen($array[0]);
            $sizemin = strlen($array[0]);

            for($i=1; $i <$size; $i++){
                if(strlen($array[$i])>$sizemax){
                    $sizemax = strlen($array[$i]);
                }
                if(strlen($array[$i])<$sizemin){
                    $sizemin = strlen($array[$i]);
                }
            }

            for($i=0; $i <$size; $i++){
                if($sizemax == strlen($array[$i])){
                    $chuoimax = $array[$i];
                }
                if($sizemin == strlen($array[$i])){
                    $chuoimin = $array[$i];
                }
            }

            echo "Chuỗi lớn nhất là ".$chuoimax.", độ dài = ".$sizemax."<br>";
            echo "Chuỗi bé nhất là ".$chuoimin.", độ dài = ".$sizemin;
        ?>
    </p>
</body>

</html>