<?php

$host = 'localhost';
$dbname = 'lalah';
$username = 'root';
$password = '';

if(isset($_POST['insert'])){

  try {
  // se connecter à mysql
  $pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
  } catch (PDOException $exc) {
    echo $exc->getMessage();
    exit();
  }

  // récupérer les valeurs 
  $id = $_POST['id'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $adresse = $_POST['adresse'];
  $telephone = $_POST['telephone'];


  // Requête mysql pour insérer des données
  $sql = "INSERT INTO `zaha`(`nom`, `prenom`,`adresse`,`telephone`) VALUES (:nom,:prenom,:adresse,:telephone)";
  $res = $pdo->prepare($sql);
  $exec = $res->execute(array(":nom"=>$nom,":prenom"=>$prenom,":adresse"=>$adresse,":telephone"=>$telephone));

  // vérifier si la requête d'insertion a réussi
  if($exec){
    header('Location:tablevoyage.php');
  }else{
    echo "Échec de l'opération d'insertion";
  }
}
?>