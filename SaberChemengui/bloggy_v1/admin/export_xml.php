<?php
$s="<?xml version='1.0' encoding='utf­8'> 
    <contacts>";
require_once("../classes/Contact.php");
	$c=new Contact();
	$liste=$c->liste();
	foreach($liste as $item)
	{
	$s.="<contact>";
	$s.="<email>$item->_email</email>";
	$s.="<sujet>$item->_sujet</sujet>";
	$s.="<message>$item->_message</message>";
	$s.="<newsletter>$item->_newsletter</newsletter>";
	$s.="<date>$item->_date_ajout</date>";
	$s.="</contact>";
	}

	$s.="</contacts>" ;

	echo $s ;
?>