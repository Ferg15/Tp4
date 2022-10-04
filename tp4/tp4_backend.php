<?php
	$matriz= [];
	for ($i=2; $i <= 20  ; $i+=2) { 
		$matriz[] = $i;
		print "<p> $i</p> ";
	}
?>
<br>
<hr>
<?php
	$matriz= ["Pedro", "Ana", "34", "1"];
	print "<pre><br>";
	print_r($matriz);
	print "<pre><br>";
	foreach ($matriz as $valor) {
		print "<p>$valor</p><br>";
	}
?>
<br>
<hr>
<?php
	$matriz= [
		'nombre'=>"Pedro",
		'apellido'=>"Torres",
		'direccion'=>"Av.Mayor3703",
		'telefono'=>"1122334455",
	]
?>
<br>
<hr>
<?php
	$matriz= ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
	print "<p> La ciudad con el indice 0 tiene el nombre $matriz[0]."
?>
<br>
<hr>
<?php
	$matriz= ['MD'=>"Madrid", 'BCL'=>"Barcelona", 'LD'=>"Londres", 'NY'=> "NewYork", 'LA'=>"LosAngeles", 'CCG'=>"Chicago"];
	print "<p> La ciudad con el indice 0 tiene el nombre $matriz[MD]."
?>
