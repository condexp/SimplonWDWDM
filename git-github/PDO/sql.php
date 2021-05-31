<?php

$user="root";
$pass="";
$dbname="simplon_wp_1";
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

try {
       
   $query= 'SELECT wp_posts.ID, post_title, post_content, post_date, display_name 
        from wp_posts,wp_users
        where post_type="post"
                and post_status="publish"
                and post_author=wp_users.ID
                ORDER BY post_date DESC;
   ';


$req = $dbh->query($query);
//$req->setFetchMode(PDO::FETCH_BOTH);http://localhost/PDO/sql.php
$req->setFetchMode(PDO::FETCH_ASSOC);
$tab = $req->fetchAll();
$req ->closeCursor();

//var_dump($tab );

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
 <h1> Acceuil du blog </h1>

 <?php foreach($tab as $row) { ?>
    <h2><a href="article.php?id=<?= $row["ID"]?>"><?= $row["post_title"]?></a></h2>    
    <p> Redigé par : XXXX - Date :<?= $row["post_date"]?> </p>
    <p> <?= $row["post_content"]?> ......</p>
    <p> <?= $row["display_name"]?> </p> 

  <?php 
}
?>

 

</body>
<html>

<?php
   /*  foreach($tab as $row) {
        var_dump($row);
    } */
    $dbh = null; 

    echo "fin de requete";
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>