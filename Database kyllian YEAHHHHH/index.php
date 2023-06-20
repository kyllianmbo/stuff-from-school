<?php
//de include om connectie te maken met de database
include 'includes/database.php';
include 'includes/functions.php';

//de header van je HTML pagina
include "header.php"; 
include 'includes/filter.php';
?>

<section>
    <div class="container mt-4">
        <div class="row">
            <?php
              
                            
            if($filter == false){
               
                $sql = "SELECT * FROM cottages";
            }
            else{
                
                $sql_add = "";

               if(count($arrFrmFilter) > 0){
               
                    $sql_add = "AND cf.facility_id in (" . implode (", ", $arrFrmFilter) . ")";
               } 

                $sql = "SELECT * FROM `cottages` c WHERE c.cottage_id in 
                    (
                        SELECT cottage_id FROM `cottages_facilities` cf
                        WHERE cf.cottage_id = c.cottage_id " .
                        $sql_add .
                    ")";
            } 
           $tblCottages = getData($sql, "fetchAll");
          // echo "<pre>";
           //var_dump($tblCottages);
              
            ?>
         <?php
         foreach ($tblCottages as $cottage){
       //  echo "--------------";
         //var_dump($cottage);
        // echo "--------------";
        }

        ?>
            <?php if(count($tblCottages) == 0){ ?>
            
                <div class="col-12">
                    <div class="alert alert-warning" role="alert">Helaas er zijn geen huisjes met de volgende selectie: <?php echo $selection; ?> </div>
                </div>
            <?php } else{ ?>
                <?php foreach($tblCottages as $cottage){ ?>
                    <?php     
            //else { //count($tblCottages) > 0 ?>
            <!-- als er wel resultaat is of als er niet gefiltert is de huisjes laten zien -->
                <?php // start loop door array met cottages uit db gegevens ?>
               <!-- als er wel resultaat is of als er niet gefiltert is de huisjes laten zien -->
               <?php // start loop door array met cottages uit db gegevens ?>
                <div class="col-12 col-md-4 mb-4 d-flex align-self-stretch">
                    <div class="card">
                        <img class="card-img-top" src="images/<?= $cottage['cottage_img']; ?>" alt="image"><!-- maak image en naam dynamisch -->
                            <div class="card-body">
                                <h5 class="card-title"><?= $cottage['cottage_name']; ?></h5> <!-- maak naam dynamisch -->
                                <p class="card-text"><?= $cottage['cottage_excerpt']; ?></p> <!-- maak omschrijving dynamisch -->
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Prijs voor volwassenen:  €<?= $cottage['cottage_price_a']; ?></li><!-- maak prijs volwassenen dynamisch -->
                                    <li class="list-group-item">Prijs voor kinderen:  €<?= $cottage['cottage_price_c']; ?></li><!-- maak prijs kinderen dynamisch -->
                                </ul>
                                <a href="huisjes.php?cottageID=<?php echo $cottage['cottage_id']; ?>" class="btn btn-secondary mt-2">Lees meer...</a><!-- maak href dynamisch -->
                            </div>
                        </div>
                    </div>
                <?php }?>
            <?php } ?>
        </div>
    </div>
</section>


<?php 
include 'includes/footer.php';
?>