<?php 

print("<h1>Test ok!</h1>");
try
{
	$bdd = new PDO('pgsql:host=server;dbname=test', 'jean', 'mcsuaptesbuf');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getmessage());
}

if ($bdd)
{
	$test = $bdd->query('SELECT * FROM test');

	while($data = $test->fetch())
	{
		?>
		<p>
			<strong>Phrase n°<?php echo $data['id'];?></strong> : <?php echo $data['phrase']; ?> <br />
		</p>
		<?php 
	}
}

?>