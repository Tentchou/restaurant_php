 
 <?php
     

      require_once("../admin/commande.php");
      
      if(!isset($_SESSION['xRttpHo0greL39']))
      {
          header("Location: ../admin/login.php");
      }
      
      if(empty($_SESSION['xRttpHo0greL39']))
      {
          header("Location: ../admin/login.php");
      }
      
      
      foreach($_SESSION['xRttpHo0greL39'] as $i){
        $nom = $i->pseudo;
        $email = $i->email;
      }
      
 ?>

  
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="logo navbar-brand " href="../" style="color:#192a56; font-size:3rem; font-weight: bolder;"><i class="fas fa-utensils" style="color:#27ae60;"></i>Resto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="../admin/afficher.php">Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="../admin/">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Suppression</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashbord.php">Dashboard</a>
        </li>
      </ul>
      <div style="margin-right: 500px">
        <h5 style="color:#27ae60; font-size:1.5rem;">Connecté en tant que: <?= $nom ?> </h5>
      </div>
      <a class="btn btn-danger d-flex" href="logout.php">Se deconnecter</a>
    </div>
  </div>
</nav>
