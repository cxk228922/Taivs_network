<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資訊二甲05江寬泓 9-2</title>
    <style>
        .color-0 { color: red; }
        .color-1 { color: orange; }
        .color-2 { color: yellow; }
        .color-3 { color: green; }
        .color-4 { color: blue; }
        .color-5 { color: indigo; }
        .color-6 { color: purple; }
    </style>
</head>
<body>
    <?php
        for($i = 1;$i<=100;$i+=1){
            $Color_class = "color-".($i%7-1);
            echo "<p class='$Color_class'> number{$i}</p>" ;
        }
    ?>
</body>
</html>
