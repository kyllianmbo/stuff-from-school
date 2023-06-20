<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

//create connection
$connection = new mysqli($servername, $username, $password, $database);


$Naamstudent = "";
$klas = "";
$Minutentelaat = "";
$Redentelaat = "";

$errorMessage = "";
$succesMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $Naamstudent = $_POST["Naamstudent"];
    $klas = $_POST["klas"];
    $Minutentelaat = $_POST["Minutentelaat"];
    $Redentelaat = $_POST["Redentelaat"];

    do  {
        if ( empty($Naamstudent) || empty($klas) || empty($Minutentelaat) || empty($Redentelaat) ) {
            $errorMessage = "All the fields are required";
            break;

        }

        // add nieuwe student 

        $sql = "INSERT INTO crud (Naamstudent, klas, Minutentelaat, Redentelaat) VALUES ('$Naamstudent', '$klas', '$Minutentelaat', '$Redentelaat')";
                
        $result = $connection->query($sql);
        
        if (!$result) {
            $errorMessage = "Invalid query:" . $connection->error;
            break;
        }


        $Naamstudent = "";
        $klas = "";
        $Minutentelaat = "";
        $Redentelaat = "";

        $succesMessage = $_POST["Student is toegevoegd"];
        $succesMessage = "Student is toegevoegd";

        header("location: /Kyllian-CRUD/index.php");
        exit;


    } while (false);

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
<style>
body {
    background-color: lightblue;
}
</style>



<body>

    
</head>
<body> 
<main style="width: 600px; margin: 20px auto;">
    <div class="container my-5">
        <h2>Nieuwe melding te late student</h2>

        <?php
    //if ( !empty($errorMessage) ) {
       // echo "
       // <div class='alert alert-warning alert-dismissible fade show'role='alert'>
       // <strong>$errorMessage</strong>
        //<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
       // </div>
      //  ";
   // }       
?>
    </div>
                   
        <form method="post">
                <label class="col-sm col-form-label">Naam student</label>
                    <div class="col-sm-6">
                    <input type="text" class="form-control" name="Naamstudent" value="<?php echo $Naamstudent;?>">
                        </div>
                </div>
                
                <br>

                <label for="klas">klas:</label>
            <select class="form-control" name="klas" value="<?php echo $klas;?>">
              <option >9A</option>
              <option >9B</option>
              <option >9C</option>
              <option >9D</option>
            </select>
              
              <br>

              <label for="Aantal minuten te laat">Aantal minuten te laat:</label>
            <select id="Aantal minuten te laat" class="form-control" name="Minutentelaat" value="<?php echo $Minutentelaat;?>">
              <option >5</option>
              <option >10</option>
              <option >15</option>
              <option >20</option>              <option >25</option>
              <option >30</option>
              <option >35</option>
              <option >40</option>
              <option >45</option>
              <option >50</option>
              <option >55</option>
              <option >60</option>
            </select>

        
        <form method="post">
        <div class="form-group">
                <label for="reden_student">Reden te laat komen:</label>
                <textarea class="form-control" rows="5" id="Redentelaat" name="Redentelaat"value="<?php echo $Redentelaat;?>"></textarea>

    <?php
    //if ( !empty($successMessage) ) {
        //echo "
        //<div class='alert alert-warning alert-dismissible fade show'role='alert'>
        //<strong>$successMessage</strong>
        //<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        //</div>
       // ";
    //}       
?>
<br>
                <div class="row mb-3">
        <div class="offset-sm-3col-sm-3d-grid">
         <button type="submit" class="btn btn-primary">Submit</button> 
            </div>
        <div class="col-sm-3d-grid">
             <a class="btn btn-outline-primary" href="/Kyllian-CRUD/index.php" role="button"> Cancel </a>
            </div>
            </div>
        </form>     
    </div>
</main>
<style>

    .col-sm-3d-grid{
        font-size: 40px;
        padding: 5px;
        border-radius: 5px;
        margin: 10px;
        position: fixed;
        left: 398%;
        top: 533px;
        
    }

    .form-control {
        width: 450px;
        
    }
</style>
</body>
</html>
