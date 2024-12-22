

<?php 
   session_start();
   require_once "db.php";
   require_once("AjouterPanier.php");
   
   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['restaurant'][$id_del]);
   }
?>

<?php require_once("header.php");?>

    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
      <h4 class="text-center bg-danger"></h4>
      <h1>Checkout</h1>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="yourmail@gmail.com">

  <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Nom</th>
           <th>Prix</th>
           <th>Quantites</th>
           <th>Type</th>
           <th>Action</th>
     
          </tr>
        </thead>
        <tbody>
        <?php 
              $total = 0 ;
              $quantite = 0; 
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['restaurant']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                //si oui 
                $products = mysqli_query($con, "SELECT * FROM nouriture WHERE id IN (".implode(',', $ids).")");

                //lise des produit avec une boucle foreach
                foreach($products as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['prix'] * $_SESSION['restaurant'][$product['id']] ;
                    $quantite = $quantite + $_SESSION['restaurant'][$product['id']];
                ?>
        <tr>
                    <td><img src="../image/<?=$product['image']?>"  width="30%" height="30%" style="border-radius:50%;"></td>
                    <td><?=$product['nom']?></td>
                    <td><?=$product['prix']?>€</td>
                    <td><?=$_SESSION['restaurant'][$product['id']] // Quantité?></td>
                    <td><?=$product['type']?></td>
                    <td><a href="panier.php?del=<?=$product['id']?>"><img src="../image/delete.png" width="15%" height="15%" ></a></td>
                    
                </tr>
                <?php endforeach ;} ?>
        </tbody>
    </table>
   
</form>


               

            


<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?=$quantite?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount"><?=$total?>€</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


      </div>
    <!-- /.container -->
<?php require_once("footer.php");?>