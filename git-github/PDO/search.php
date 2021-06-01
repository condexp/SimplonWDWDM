<?php
if (!isset ($_GET ["s"])){

    
    
    header("Location: sql.php");
    //die("Parametre requit!");
} 

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
       // Premiere requete
  /*  $query= 'SELECT  wp_posts.ID, post_title, post_content, post_date, display_name 
        from wp_posts
        INNER JOIN wp_users ON post_author=wp_users.ID
        where  (  post_type="post" AND post_status="publish")
        and ( post_title LIKE "%' .$_GET["s"].'%" OR post_content LIKE "%' .$_GET["s"].'%")
        ORDER BY post_date DESC
        '; */

        $query= 'SELECT  wp_posts.ID, post_title, post_content, post_date, display_name 
        from wp_posts
        INNER JOIN wp_users ON post_author=wp_users.ID
        where  (  post_type="post" 
        AND post_status="publish")
        AND ( post_title LIKE :s
        OR post_content LIKE :s)
        ORDER BY post_date DESC
        ';
  //die($query);
  /* Premiere requete
$req = $dbh->query($query);
//$req->setFetchMode(PDO::FETCH_BOTH);http://localhost/PDO/sql.php
$req->setFetchMode(PDO::FETCH_ASSOC);
$row= $req->fetch();
$req ->closeCursor();
 */
//var_dump($tab );


// deuxieme requete:

$req = $dbh->prepare($query);
$req ->bindValue(':s',"%" .$_GET["s"]."%",PDO::PARAM_STR);
$req ->execute();
$req->setFetchMode(PDO::FETCH_ASSOC);
$tab=$req->fetchAll();
$req->closeCursor();

?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Le resultat de ma recherche</title>
        <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
    </head>

<body>
<?php foreach($tab as $row) { ?>

    <h1> Search For :<?= $_GET ["s"]?></h1>
    <h2><?= $row["post_title"]?></a></h2>    
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
