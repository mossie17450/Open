<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Gestion de calendrier | Accueil</title>
    <link rel="stylesheet" type="text/css" href="design/calendrier.css" media="screen" />
</head>
<body>
	<h1>Accueil</h1>
    <p>Liste des pages disponibles :</p>
    <ul>
    	<li><a href="calendrier.php">Calendrier</a></li>
        <li><a href="admin/ajoutevent.php">Ajouter un événement</a></li>
        <li><a href="admin/supprevent.php">Supprimer un événement</a></li>
    </ul>
    
    
    <br/><br/>
    
    <h2>Important avant de commencer</h2>
    <h4>Dans phpMyAdmin :</h4>
    <ul>
        <li>
            <p>Création de la première table (<em>calendrier</em>) :<br/></p>
            
            <p class="code">
            CREATE TABLE `calendrier` (<br/>
            `id_calendrier` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,<br/>
            `jour_evenement` VARCHAR( 2 ) NOT NULL ,<br/>
            `mois_evenement` VARCHAR( 2 ) NOT NULL ,<br/>
            `annee_evenement` VARCHAR( 4 ) NOT NULL ,<br/>
            `id_evenement` INT NOT NULL<br/>
            ) ENGINE = innodb;
            </p>
        </li>
        
        <li>
            <p>Création de la deuxième table (<em>evenements</em>) :<br/></p>
            
            <p class="code">
                CREATE TABLE `evenements` (<br/>
                `id_evenement` INT NOT NULL ,<br/>
                `titre_evenement` VARCHAR( 255 ) NOT NULL ,<br/>
                `contenu_evenement` TEXT NOT NULL ,<br/>
                PRIMARY KEY ( `id_evenement` )<br/>
                ) ENGINE = innodb;
            </p>
        </li>
    </ul>
    
    
    <h4>Autre :</h4>
    <ul>
    	<li>Dans le dossier "includes" modifier la page "sql_connect.php" avec vos identifiants (si c'est en local la foction mysql_connect attends pour paramètres "localhost", "root", "")</li>
    </ul>
</body>
</html>
