<?php

$id=$_POST['id'];
$n=$_POST['nom'];
$p=$_POST['prenom'];
$a=$_POST['adresse'];
$t=$_POST['telephone'];
editTest($id,$n,$p,$a,$t);
function editTest($id,$n,$p,$a,$t){
$host = 'localhost';
$dbname = 'lalah';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
$sql = "UPDATE zaha SET nom ='$n', prenom='$p',adresse='$a',telephone='$t' WHERE id=$id";
$stmt = $pdo->prepare($sql);
$stmt->execute();



    if($stmt){
        header('Location:tablevoyage.php');
    }

}

?>