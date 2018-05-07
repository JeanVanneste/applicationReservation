<?php

print ("Test ok");
print ("\n");
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getmessage());
}

if ($bdd)
{
    print ("Connexion OK\n");
}
?>
