<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>patroon-02</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        const ROWS = 9;

        for($i = 0; $i < ROWS ; $i++) {
            for($j = 0; $j < ROWS; $j++) {
                echo ("<div class='circle'></div>");
            }
               
        }
    ?>
</body>
</html>