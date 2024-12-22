
<?php

function ajouterUser($nom, $prenom, $email, $motdepasse)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("INSERT INTO utilisateurs(nom, prenom, email, motdepasse) VALUES (?, ?, ?, ?)");

    $req->execute(array($nom, $prenom, $email, $motdepasse));

    return true;

    $req->closeCursor();
  }
}

// function getUsers($email, $password){
  
//   if(require("connexion.php")){

//     $req = $access->prepare("SELECT * FROM utilisateur ");

//     $req->execute();

//     if($req->rowCount() == 1){
      
//       $data = $req->fetchAll(PDO::FETCH_OBJ);

//       foreach($data as $i){
//         $mail = $i->email;
//         $mdp = $i->motdepasse;
//       }

//       if($mail == $email AND $mdp == $password)
//       {
//         return $data;
//       }
//       else{
//           return false;
//       }

//     }

//   }

// }

function modifier($nom, $description,$prix,$id)
{
  if(require("../includes/connexion.php"))
  {
    $req = $access->prepare("UPDATE nouriture SET  nom = ?, description = ?, prix = ? WHERE id=?");

    $req->execute(array($nom, $description, $prix,$id));

    $req->closeCursor();
  }
}

function afficherUnProduit($id)
{
	if(require("../includes/connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM nouriture WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

  function ajouter($nom, $description,$prix, $image)
  {
    if(require_once("../includes/connexion.php"))
    {
      $req = $access->prepare("INSERT INTO nouriture (nom, description, prix, image) VALUES (?, ?, ?, ?)");

      $req->execute(array($nom,  $description,$prix, $image));

      $req->closeCursor();
    }
  }

  function ajouterCommentaire($nom, $email,$photo, $commentaire)
  {
    if(require_once("../includes/connexion.php"))
    {
      $req = $access->prepare("INSERT INTO commentaire(nom, email, photo, commentaire) VALUES (?, ?, ?, ?)");

      $req->execute(array($nom,$email,$photo,$commentaire));

      $req->closeCursor();
    }
  }


function afficher()
{
	if(require_once("./includes/connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM nouriture ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("../includes/connexion.php"))
	{
		$req=$access->prepare("DELETE FROM nouriture WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

function getAdmin($email, $password){
  
  if(require_once("../includes/connexion.php")){

    $req = $access->prepare("SELECT * FROM admin WHERE id=2");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}

?>