


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    

</head>
<style>
body {
    background-color: lightblue;
}
</style>



<body>

    <div class="cointainer my-5">
        <h2>naam studenten</h2>
        <a class="btn btn-primary" href="/Kyllian-Crud/create.php" role="button">nieuwe student</a>
        
        <br>
        <table class="table">
           <thead> 
            <tr>
                <th>id</th>
                <th>Naamstudent</th>
                <th>klas</th>
                <th>Minutentelaat</th>
                <th>Redentelaat</th>
                <th>created_at</th>


                 
            </tr>     
        </thead>   
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "crud";

            // create connection
            $connection = new mysqli($servername, $username, $password, $database);

            // check connection
            if ($connection->connect_error) {
                die("connection failed: " . $connection->connect_error);
            }

            //read all row from database table
            $sql = "SELECT * FROM crud";
            $result = $connection->query($sql);

            if (!$result) {
                die("invalid query: " . $connection->error);
            }
            

            //read data of each  row
            while($row = $result->fetch_assoc()) {
                
                echo "
                <tr>
                    <td>$row[id]</td>
                    <td>$row[Naamstudent]</td>
                    <td>$row[klas]</td>
                    <td>$row[Minutentelaat]</td>
                    <td>$row[Redentelaat]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='/Kyllian-CRUD/edit.php?id=$row[id]'>Bewerken</a>
                        <a class='btn btn-primary btn-sm' href='/Kyllian-CRUD/delete.php?id=$row[id]'>Verwijderen</a>
                </td>   
                </tr>
                ";
            }

            ?>

            
         

        
            
</tbody>
    </table>
    </div>
    </body>
    </html>  



        </table>
        

</div>
    
</body>
</html>