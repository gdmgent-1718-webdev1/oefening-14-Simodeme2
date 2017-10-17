<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>patroon-09</title>
    
</head>
<body>
    <?php

        const ROWS = 9;
        const COLUMNS = 9;

        for($i = 0; $i < ROWS; $i++){
            for($j = 0; $j < ROWS; $j++){
                if($j + $i + 1 == 9) {
                    echo "<div class='circle_r'></div>";
                }
                else if($j == $i) {
                    echo "<div class='circle_r'></div>";
                }
                else if(9 - $j > $i) {
                    echo "<div class='circle_b'></div>";
                }
                else {
                    echo "<div class='circle_b'></div>";
                }
                
            }
            echo "<br>";
        }

    ?>
</body>
</html>