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
    <title>ajout</title>
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
                        <li><a href="choix.html">Où allez-vous</a></li>
                    </ul>
                </nav>
            </header>
    <form action="process.php" method="post">
    <div class="container fluid">
        <legend>ENTRER VOTRE INFORMATION</legend>
        <div class="form-group" style="display: none;">
        <label>id: </label><input type="text" name="id" id="id"  class="form-control w-50">
        </div>
        <div class="form-group">
        <label>NOM: </label><input type="text" name="nom" id="nom" class="form-control w-50">
        </div>
        <div class="form-group">
        <label>PRENOM: </label><input type="text" name="prenom" id="prenom" class="form-control w-50">
        </div>
        <div class="form-group">
        <label>ADDRESS: </label><input type="text" name="adresse" id="adresse" class="form-control w-50">
        </div>
        <div class="form-group">
        <label>TELEPHONE: </label><input type="text" name="telephone" id="telephone" class="form-control w-50">
        </div>
        <div class="form-group">
            <label><input type="submit" value="Ajouter" name="insert"  class="btn btn-primary">     <input type="reset" value="Annuler" class="btn btn-primary"></label>
        </div>
    </div>
</div>
</form>
<script type="text/javascript" src="./jquery.js"></script>
<script type="text/javascript" src="./bootstrap.js"></script>    
</body>
</html>