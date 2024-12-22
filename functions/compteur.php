

<?php

function ajouter_vue(){
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'fichiers' . DIRECTORY_SEPARATOR . 'compteur'; 
    $fichier_journalier = $fichier . '-' .date('Y-m-d'); 
   //verifier si le fichier existe
   incrementer_compteur($fichier);
   incrementer_compteur($fichier_journalier);
}

//fonction d'incrementation
function incrementer_compteur(string $fichier): void{
    $compteur = 1; 
    if(file_exists($fichier)){
       //incrementer si le fichier existe
       $compteur = (int)file_get_contents($fichier);
       $compteur++; 
    } 
     //si non creer le fichier avec pour valeur 1
    file_put_contents($fichier, $compteur); 
}
//afficher le nombre de vue
function nombre_vue(): string{
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'fichiers' . DIRECTORY_SEPARATOR . 'compteur'; 
    return file_get_contents($fichier);
}


//fonction pour le nomre de vue par mois
function nombre_vue_mois(int $annee, int $mois): int{
    $mois = str_pad($mois , 2, '0', STR_PAD_LEFT); 
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'fichiers' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*'; 
    $fichiers = glob($fichier);
    $total = 0;
    foreach($fichiers as $fichier){
        $total += (int)file_get_contents($fichier);
    }
    return $total; 
    
}

//verifier les details
function nombre_vue_details_mois(int $annee, int $mois): array{
    $mois = str_pad($mois , 2, '0', STR_PAD_LEFT); 
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'fichiers' . DIRECTORY_SEPARATOR . 'compteur-' . $annee . '-' . $mois . '-' . '*'; 
    $fichiers = glob($fichier);
    $visites = [];
    foreach($fichiers as $fichier){
       $partie = explode('-', basename($fichier));
       $visites[] = [
            'annee' => $partie[1],
            'mois' => $partie[2],
            'jour' => $partie[3],
            'visites' => file_get_contents($fichier)
       ];
       
    }
    return $visites;  
}