<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./all.css">
    <link rel="stylesheet" href="style.css" />
	<script defer src="jquery/jquery.js"></script>
    <title>modifier</title>
</head>
<body>
<div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <img src="images/Dora_logo_licence.png" alt="Logo de Dora" id="logo" />
                    <h2>Carnets de voyage</h2>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                      	<li><a href="ajoutele.php" class="active">S'inscrire</a></li>
                    </ul>
                </nav>
            </header>
<?php echo $_GET['id']; ?>
    <form action="modif.php" method="post">
    <div class="container fluid">
        
        <?php
                  $bdd = new PDO("mysql:host=127.0.0.1; dbname=lalah", "root", "");
                  $affiche = $bdd-> query("SELECT * from zaha WHERE id=".$_GET['id']);
                  while ($aff=$affiche->fetch()){
                    ?>
                    <legend>MODIFIER INFORMATION</legend>
        <div class="form-group" style="display: none;">
        <label>id: </label><input type="text" name="id" id="id" value='<?= $aff['id']; ?>'  class="form-control w-50">
        </div>
        <div class="form-group">

        <label>NOM: </label><input type="text" name="nom"  value='<?= $aff['nom']; ?>' id="nom" class="form-control w-50">
        </div>
        <div class="form-group">
        <label>PRENOM: </label><input type="text" name="prenom" value='<?= $aff['prenom']; ?>' id="prenom" class="form-control w-50">
        </div>
        <div class="form-group">
        <label>ADDRESS: </label><input type="text" name="adresse" value='<?= $aff['adresse']; ?>' id="adresse" class="form-control w-50">
        </div>
        <div class="form-group">
        <label>TELEPHONE: </label><input type="text" name="telephone" value='<?= $aff['telephone'];} ?>' id="telephone" class="form-control w-50">
        </div>
        <div class="form-group">
            <label><Button type="submit"  value='<?= $_GET['id'];?>' name="id"  class="btn btn-primary"> Modifier </button>   
             <input type="reset" value="Annuler" class="btn btn-primary"></label>
        </div>
    </div>
    </div>
</form>
<script type="text/javascript" src="./jquery.js"></script>
<script type="text/javascript" src="./bootstrap.js"></script>    
</body>
</html>