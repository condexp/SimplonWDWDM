<?php

function findAll(): array
{
    $db = getDBConnection();

    $request = $db->query('SELECT * FROM message ORDER BY date DESC limit 10');
    $request->setFetchMode(PDO::FETCH_ASSOC);

    $messages = $request->fetchAll();

    $request->closeCursor();

    return $messages;
}

function create(array $post): void
{
    $db = getDBConnection();

    $request = $db->prepare('INSERT INTO message(pseudo, content) VALUES (:pseudo, :content)');
    $request->execute([
        'pseudo' => $post['pseudo'],
        'content' => $post['content']
    ]);
}

function delete(int $id): void
{
    $db = getDBConnection();

    $request = $db->prepare('DELETE FROM message WHERE id = ?');
    $request->execute([$id]);
}

function getDBConnection()
{
    try {
        $option = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        return new PDO('mysql:host=localhost;dbname=chat', 'root', '', $option);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

  if (1>2){
//getDBConnection():PDO
  
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
 return new PDO($dns, $user, $pass,$options); 
 
  
  }
 


/**
 * Récupérer les messages dans la base de données
 */
function findAll(): array
{ 
  $dbh = getDBConnection();
  $sth = $dbh->query('SELECT date,pseudo,content FROM message limit 3');
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
    $pseudo=$_POST ['pseudo'];
    $content=$_POST ['pseudo'];
    $dbh = getDBConnection();
    $stmt = $dbh->prepare("INSERT INTO MESSAGE (pseudo, content) VALUES (:pseudo, :content)");
    $stmt->bindParam(':pseudo', $pseudo);
    $stmt->bindParam(':content', $content);
    
$stmt->execute();
      
}
}
