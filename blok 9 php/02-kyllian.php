                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                    </head>
                    <body>

                    <form method="POST">
                    <input type="text" name="value1" >
                    <input type="text" name="vermenigvuldigen" value="*" >
                    <input type="text" name="value2" >
                    <input type="submit" name="submit" value="Berekenen">
                    </form>
                    <?php
if(isset($_POST['submit'])){
    $value1 = $_POST['value1'];
    $multiply = $_POST['vermenigvuldigen'];
    $value2 = $_POST['value2'];

    if($multiply == "*"){
        echo $value1 . ' x ' . $value2 . ' = ' . ($value1*$value2);
    }
}
?>









        
    </body>
    </html>