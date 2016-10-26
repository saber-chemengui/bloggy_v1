<?php 
								$id=$_GET['id'];
								require_once('../classes/Contact.php');
								$c=new Contact();
								$c->_id = $id;
								$c->supprimer();
								header("Location:contact_liste.php?retour=1");

?>