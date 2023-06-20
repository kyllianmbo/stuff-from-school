

<?php
include 'includes/database.php';
include 'includes/functions.php';
include 'header.php';

$huisjeid=1;

if (isset($_GET['cottageID'])) {
    $huisjeid=$_GET['cottageID'];


}


$sql="SELECT * FROM cottages WHERE cottage_id=".$huisjeid;
$tblCottage =getData($sql, 'fetch');

?>

<section>
    <div class="container mt-4">
    <h1><?php echo $tblCottage['cottage_name']; ?></h1>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide pointer-event" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item">
                    <img src=<?php echo "images/".$tblCottage ["cottage_img"]?> class="d-block w-100" alt="ijmuiden.jpg"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item active">
                    <img src=<?php echo "images/".$tblCottage ["cottage_img2"]?> class="d-block w-100" alt="ijmuiden-strand.jpg"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item">
                    <img src=<?php echo "images/".$tblCottage ["cottage_img3"]?> class="d-block w-100" alt="ijmuiden-hottub.jpg"><!--src en alt dynamisch maken -->
                    </div>
                    <div class="carousel-item">
                    <img src=<?php echo "images/".$tblCottage ["cottage_img4"]?> class="d-block w-100" alt="ijmuiden-haard.jpg"><!--src en alt dynamisch maken -->
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
            <div class="col">
            <h5>Omschrijving</h5>
            <p>description huisje (dynamisch maken)</p>
            <p><?php echo $tblCottage['cottage_descr']?></p>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container mt-4 bg-light">
        <div class="row  px-4 py-4">
            <div class="col">
            <?php
                include "includes/facilities.php";
                ?>
            </div>

            <div class="col">
                <h4>Prijzen (per persoon per nacht)</h4>
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item">Volwassenen: &euro; <?= number_format($tblCottage['cottage_price_a'], 2); ?></li>
                            <li class="list-group-item">Kinderen: &euro; <?= number_format($tblCottage['cottage_price_c'], 2); ?></li>
                    </ul>
            </div>

            <div class="col">
                <?php
                 include 'includes/additions.php'
                ?>
            </div>
        </div>
    </div>
</section>
<?php 
include 'includes/calculateprice.php';
include 'includes/footer.php';
;?>




