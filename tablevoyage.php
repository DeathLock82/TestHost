<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./all.css">
    <link rel="stylesheet" href="style.css" />
	<script defer src="jquery/jquery.js"></script>
    <title>voyage</title>
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
                        <li><a href="choix.php">Où allez-vous</a></li>
                    </ul>
                </nav>
            </header>
    <div class="container fluid">
        <legend>LES VOYAGEURS</legend>
      
    <div class="row">
        <div class="form-group">
            <table class="table table-bordered" style="text-align: center;">
                <thead>
                  <tr>
                    <th>MATRICULE</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>ADRESSE</th>
                    <th>TELEPHONE</th>
                    <th>MODIFIER</th>
                    <th>SUPRIMER</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $bdd = new PDO("mysql:host=127.0.0.1; dbname=lalah", "root", "");
                  $affiche = $bdd-> query("SELECT * from zaha");
                  while ($aff=$affiche->fetch()){

                      echo    "<tr>";
                      echo        "<td>".$aff['id']."</td>";
                      echo        "<td>".$aff['nom']."</td>";
                      echo        "<td>".$aff['prenom']."</td>";
                      echo        "<td>".$aff['adresse']."</td>";
                      echo        "<td>".$aff['telephone']."</td>";
                      echo        "<td>
                      <form action=edit.php methode='GET'>
                      <button type='submit' class='btn btn-primary' value='".$aff['id']."' name='id'>MODIFIER</button>
                       </form>
                      </td>"; 
                       
                      echo "<td>
                      
                      <form action=supr.php method='GET'>
                        <Button type='submit' class='btn btn-danger' value='".$aff['id']."' name='id'>SUPRIMER</button> 
                      </form>
                      </td>";
                      echo    "</tr>";
                    }
                  ?>
                  
                </tbody>
              </table>
        </div>
    </div>
    </div>
    </div>
<script type="text/javascript" src="./jquery.js"></script>
<script type="text/javascript" src="./bootstrap.js"></script>
</body>
</html>