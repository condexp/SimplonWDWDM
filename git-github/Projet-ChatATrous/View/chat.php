<?php 

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live chat Amazin</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
</head>

<body>

<div class="container">

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col" class="col-2">DATE</th>
            <th scope="col" class="col-2">Nom pseudo</th>
            <th scope="col" class="col-8">Les Messages</th>
        </tr>
    </thead>
    <tbody>
        
    <!-- Dans une premier temps faites une boucle pour afficher "en dur" plusieurs messages (plusieurs fois le même) -->
     <?php 

foreach($tab_affi=findAll() as $row) {
  ?>
        <tr class="table-light">
        <td class="col-2"><?=($row["date"])?></td>
        <td class="col-2"><?=($row["pseudo"])?></td>
        <td class="col-8"><?=($row["content"])?></td>
        </tr>
     
<?php }
     ?>       
    
    </tbody>
</table>
</div>
</body>

</html>