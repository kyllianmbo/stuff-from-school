<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <input type="text" id="name" name="name">
    </form>
            <?php
            if (isset($_GET['name'])){
            echo "<br>Welkom " . $_GET['name'] . "!";
            }
            ?>
</body>
</html>