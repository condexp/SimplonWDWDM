<?php
  //connection;
$user="root";
$pass="";
$dbname="chat";
$host="localhost";

try {

    $dns= 'mysql:host='.$host.';dbname='.$dbname;
        //echo $dns;
    $options=array(
PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION

    );
    $dbh = new PDO($dns, $user, $pass,$options);
   //var_dump( $dbh);
   //echo "connexion etablie";
   
} catch (PDOException $e) {
    print "Erreur connexion !: " . $e->getMessage() . "<br/>";
    die();
}

// findall

try {
       
    $query= 'SELECT id, pseudo, content, date FROM message ORDER BY date DESC LIMIT 5;';
    $req = $dbh->query($query);
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $req->fetchAll();
    $req ->closeCursor();

//var_dump($tab );  
    $dbh = null; 
    echo "fin de requete";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ici mon titre</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    </head>

<body>

 <?php foreach($tab as $row) { ?>
    <p> <?= $row["pseudo"]?> ......</p>
    <p> <?= $row["content"]?> </p> 
<?php }?> 

</body>
<html>


<?php

/**
 * Récupérer les messages dans la base de données
 */
function findAll(): array
{
    $db = getDBConnection();

    // Coder ici
}

/**
 * Ajouter un message dans la base de données
 */
function create(array $post): void
{
    $db = getDBConnection();

    // Coder ici
}

/**
 * Connection à la base de donnéess
 */
function getDBConnection(): PDO
{
    // Coder ici
}
