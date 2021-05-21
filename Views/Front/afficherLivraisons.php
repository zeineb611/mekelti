<?php require_once 'header.php';
?>
<?php 
    require_once "../../Controller/livraisonController.php"; 
    $livraisons = livraisonController::getLivraisons();
?>
<!-- header -->
<?php require_once 'header_main.php'; ?>
<!-- //header -->

<!DOCTYPE html>
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0">
        <a href="index.php">Home</a> <span class="mx-2 mb-0">/</span>
        <strong class="text-black">Livraison</strong>
      </div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="h3 mb-5 text-black">Mes livraisons</h2>
      </div>
      <div class="col-md-12">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Prix</th>
                                                    <th>Adresse</th>
                                                    <th>Telephone</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?PHP
                                                    foreach ($livraisons as $row) {
                                                ?>

                                                <tr>
                                                    <td><?PHP echo $row['prix'];?></td>
                                                    <td><?PHP echo $row['adresse']; ?></td>
                                                    <td><?PHP echo $row['telephone']; ?></td>

                                                </tr>

                                                <?PHP
                                                    }
                                                ?>
                                            </tbody>

                                        </table>

      </div>

    </div>
  </div>
</div>



<div class="site-section bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-black mb-4">Notre Cuisine</h2>
      </div>
      <div class="col-lg-4">
        <div class="p-4 bg-white mb-3 rounded">
          <span class="d-block text-black h6 text-uppercase">Ariana</span>
          <p class="mb-0">1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala, Ariana, Tunisia</p>
        </div>
      </div>
      
      
    </div>
  </div>

</div>

<?php require_once 'footer.php';
?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>