<?php 
	require_once('../classes/Contact.php');
	$c=new Contact();
	$liste=$c->liste();
	foreach ($liste as $item) {
		echo "<br>jhfikgu</br>";
	}
 ?>