<?php

print ("Test ok");
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=localhost;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getmessage());
}

if ($bdd)
{
    $reponse = $bdd->query('SELECT * FROM jeux_video');

    while ($donnees = $reponse->fetch())
    {
        ?>
        <p>
            <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
        </p>
        <?php
    }
}
?>
