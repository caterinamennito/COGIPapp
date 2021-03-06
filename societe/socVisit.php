
<?php

try
{
	// On se connecte à MySQL
    $bdd= new PDO('mysql:host=localhost;dbname=id9271623_cogip;charset=utf8', 'id9271623_ragazzadb', 'IlaCatMo');

}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$resultat = $bdd->query('SELECT * FROM societe');




?>


<!DOCTYPE HTML>
  <html>
	<head>
		<title>COGIPapp</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--CSS made in bootstrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!--my CSS-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--fontawesome-->
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

	</head>

	<body>
			<header>
				<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #30032c;">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<li class="nav-item ">
								<a class="nav-link" href="../page_membre_visiteur.php">Accueil<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../factures/visiteurfacture.php">Factures</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="../societe/socVisit.php">Sociétés</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../contacts/contactsListe.php">Contacts</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="../index.php">Connexion</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<main>

    <body>
      <form style="margin:10px" method="post" enctype = "multipart/form-data" action="">
        <table border='1'>
        	<tr>
            <th>Check</th>
            <th>Id</th>
            <th>Nom</th>
            <th>Pays</th>
            <th>N. TVA</th>
            <th>type</th>
          </tr>

        	<?php
        	while ($donnees = $resultat->fetch())
        	{ ?>
          	<tr>
              <td><input type="checkbox" name="select[]" value="<?= $donnees['idsociete']?>" /></td>
							<td><?= $donnees['idsociete']?></td>
							<td><a href= "detailsoc.php?contact=<?= $donnees['idsociete']?>"><?= $donnees['nomsociete']?></a></td>
          		<td><?= $donnees['pays']?></td>
          		<td><?= $donnees['tva']?></td>
          		<td><?= $donnees['type']?></td>
            </tr>
          <?php }

			 ?>
        </table>

      
				</form>
			</main>
      </body>
      </html>
