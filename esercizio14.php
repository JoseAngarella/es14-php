<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sfondoCasuale($lar){
            if($lar <150){
                $color="#7FFFD4";
            }else if($lar>=150 && $lar<=250){
                $color="#1E90FF";
            }else if($lar>250){
                $color="#0000FF";
            }
            return $color;
        }
        $larghezzaDiv=rand(50,500);
        $altezzaDiv=$larghezzaDiv*2;
        $coloreSfondoDiv=sfondoCasuale($larghezzaDiv);

        echo "<div style='background-color:$coloreSfondoDiv; width:{$larghezzaDiv}px; height:{$altezzaDiv}px'></div>";

    ?>
</body>
</html>