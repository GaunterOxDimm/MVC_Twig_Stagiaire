<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$offresDao = new OffresDAO();

$offre = new Offres(null, "JEE Developpeur", "Super job de développeur");

if (isset($_POST['title']) && isset($_POST['description'])) { 
   $offre = $this->_bdd->prepare("INSERT INTO `offers` (`id`, `title`, `description`) VALUES (NULL, 'Développeur Fullstackkk', 'Recherche Développeur FullStack Débutantjj')");
//afficher la vue en envoyant la variable status et l'offre créée ;
}else {
//afficher la vue ;
}
//$offre->set_title("JEE Developpeur");
//$offre->set_description("Super job de développeur");

$status = $offresDao->add($offre);

//On affiche le template Twig correspondant
if ($status) {
    echo $twig->render('creer_offre.html.twig', ['status' => "Ajout OK", 'offre' => $offre]);
} else {
    echo $twig->render('creer_offre.html.twig', ['status' => "Erreur Ajout"]);

}
