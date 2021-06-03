<?php

  //define connection function
  function getDBConnection():PDO{
  $user="root";
  $pass="";
  $dbname="chat";
  $host="localhost";

  $options=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
        );

 $dns= 'mysql:host='.$host.';dbname='.$dbname; 
 $dbh = new PDO($dns, $user, $pass,$options); 

  return $dbh;
  
  }
?> 

<?php

/**
 * Récupérer les messages dans la base de données
 */
function findAll(): array
{ 
    $dbh = getDBConnection();
    $sth = $dbh->query('SELECT date,pseudo,content FROM message');
    $sth->setFetchMode(PDO::FETCH_ASSOC);
    $tab = $sth->fetchAll();
    $sth ->closeCursor();    
    
    return $tab;

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
 * function getDBConnection(): PDO
*{
*    // Coder ici
*}
 */

