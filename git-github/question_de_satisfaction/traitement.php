<?php 


function calculRate(string $score): string
{
    $rate = '';

    if ($score === '-1') $score = 0;

    for ($i = 1; $i <= $score; $i++) {
        $rate .= '⭐';
    }
    for ($i = $score + 1; $i <= 5; $i++) {
        $rate .= '⚫';
    }

    return $rate;
}



// version 1

function clavier_numerique (){


          echo '<p>';

                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "0" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "1" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "2" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "3" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "4" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "5" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "6" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "7" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "8" ?>" role="button" class="btn btn-secondary">0</a>';
                echo' <a href="?step=4&result=<?= $_GET["result"] ?>&tel=<?= $_GET["tel"] . "9" ?>" role="button" class="btn btn-secondary">0</a>';
                
                echo' <a href="?step=final&result=<?= $_GET["result"] ?>" role="button" class="btn btn-danger btn-sm">Ne pas être rappelé</a>';
           echo' </p> ';

        }


// version 2

 function clavier_numerique_avance (){


    for ($i = 0; $i <= 9; $i++) {
        ?>
            <a href="?step=4&result=<?= $_GET['result'] ?>&tel=<?= $_GET['tel'] . $i ?>" role="button" class="btn btn-secondary"><?= $i ?></a>
        <?php
        }
 }


?>