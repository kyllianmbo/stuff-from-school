
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";
// Create connection
$connection = new mysqli($servername,$username,$password,$database);

$id = "";
$Naamstudent = "";
$klas = "";
$Minutentelaat = "";
$Redentelaat = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'GET') {
    
    //  if ( !isset($GET["id"])) {
    //   header("location: /CRUD/index.php");
    //          exit;
                //}

    $id = $_GET["id"];
 
    $sql =  "SELECT * FROM crud WHERE id=$id";
    $result = $connection->query($sql);
    $row = $result->fetch_assoc();

    //if (!$row) {
        // header("location: /CRUD/index.php");
        // exit;
    // }
    $id = $row["id"];
    $Naamstudent = $row["Naamstudent"];
    $klas = $row["klas"];
    $Minutentelaat = $row["Minutentelaat"];
    $Redentelaat = $row["Redentelaat"];
    

    
}
else {
    $id = $_POST["id"];
    $Naamstudent = $_POST["Naamstudent"];
    $klas = $_POST["klas"];
    $Minutentelaat = $_POST["Minutentelaat"];
    $Redentelaat = $_POST["Redentelaat"];
    
    do {
        if ( empty($id) || empty($Naamstudent) || empty($klas) || empty($Minutentelaat) || empty($Redentelaat)) {
            $errorMessage = "All the fields are required";
            break;
        }

        $sql = "UPDATE crud " .
        "SET Naamstudent = '$Naamstudent', klas = '$klas', Minutentelaat = '$Minutentelaat', Redentelaat = '$Redentelaat' " . 
        "WHERE id = $id";

    $result = $connection->query($sql);

    if (!$result) {
        $errorMessage = "Invalid query: " . $connection->error;
        break;
    }

    $successMessage = "crud updated correctly";

    header("location: /Kyllian-CRUD/index.php");
    exit;


    } while (true);
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
 <body> 
 <main style="width: 600px; margin: 20px auto;">
     <div class="container my-5">
         <h2>Nieuwe melding te late student</h2>

         <?php
//     if ( !empty($errorMessage) ) {
//         echo "
//         <div class='alert alert-warning alert-dismissible fade show'role='alert'>
//         <strong>$errorMessage</strong>
//         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//         </div>
//         ";
//     }       
// ?>
     </div>
                   
         <form method="post">
                 <input type="hidden" name="id" value="<?php echo $id;?>">
                 <label class="col-sm col-form-label">Naam student</label>
                     <div class="col-sm-6">
                     <input type="text" class="form-control" name="Naamstudent" value="<?php echo $Naamstudent;?>">
                         </div>
                 </div>
                
                 <br>

                 <label for="klas">klas:</label>
             <select class="form-control" name="klas" value="<?php echo $klas;?>">
               <option <?php if ($klas == '9A') { echo 'selected'; } ?> >9A</option>
               <option <?php if ($klas == '9B') { echo 'selected'; } ?> >9B</option>
               <option <?php if ($klas == '9C') { echo 'selected'; } ?> >9C</option>
               <option <?php if ($klas == '1C') { echo 'selected'; } ?> >1C</option>
               <option <?php if ($klas == '9D') { echo 'selected'; } ?> >9D</option>
             </select>
              
               <br>

               <label for="Aantal minuten te laat">Aantal minuten te laat:</label>
            <select id="Aantal minuten te laat" class="form-control" name="Minutentelaat" value="<?php echo $Minutentelaat;?>">
               <option <?php if ($Minutentelaat == '5') { echo 'selected'; } ?> >5</option>
               <option  <?php if ($Minutentelaat == '10') { echo 'selected'; } ?> >10</option>
               <option <?php if ($Minutentelaat == '15') { echo 'selected'; } ?> >15</option>
               <option <?php if ($Minutentelaat == '20') { echo 'selected'; } ?> >20</option>
              <option <?php if ($Minutentelaat == '25') { echo 'selected'; } ?> >25</option>
               <option  <?php if ($Minutentelaat == '30') { echo 'selected'; } ?> >30</option>
               <option <?php if ($Minutentelaat == '35') { echo 'selected'; } ?>  >35</option>
              <option <?php if ($Minutentelaat == '40') { echo 'selected'; } ?>  >40</option>
              <option <?php if ($Minutentelaat == '45') { echo 'selected'; } ?>  >45</option>
               <option <?php if ($Minutentelaat == '50') { echo 'selected'; } ?> >50</option>
               <option <?php if ($Minutentelaat == '55') { echo 'selected'; } ?>  >55</option>
               <option <?php if ($Minutentelaat == '60') { echo 'selected'; } ?>  >60</option>
             </select>

        
         <form method="post">
        <div class="form-group">
                 <label for="reden_student">Reden te laat komen:</label>
                 <textarea class="form-control" rows="5" id="Redentelaat" name="Redentelaat"><?php echo $Redentelaat;?></textarea>

     <?php
//     if ( !empty($successMessage) ) {
//         echo "
//         <div class='alert alert-warning alert-dismissible fade show'role='alert'>
//         <strong>$successMessage</strong>
//         <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//         </div>
//         ";
//     }       
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
        left: 40%;
        top: 533px;
        
    }

    .form-control {
        width: 450px;
    }
</style>
</body>
</html>