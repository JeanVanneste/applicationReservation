<?php

echo ("Test ok");

$connexion = mysql_connect("localhost/test", "root", "mcsuaptesbuf");
if ($connexion) {
    print ("Connexion OK");
}
else {
    print ("Connexion KO");
}

?>