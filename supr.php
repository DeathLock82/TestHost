<?php
/*
if(isset($_POST['id'])=='lalaandry')
{
    $id=$_POST['id'];
*/
$id=$_GET['id'];
deleteTest($id);
function deleteTest($name){  
$host = 'localhost';
$dbname = 'lalah';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host=$host;dbname=$dbname","$username","$password");
    $sql = "DELETE FROM zaha WHERE id = '$name'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    if($stmt){
        header('Location:tablevoyage.php');
    }

}

?>