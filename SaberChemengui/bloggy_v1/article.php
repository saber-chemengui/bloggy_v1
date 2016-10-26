<?php require_once("header.inc.php");
	require_once('classes/Article.php');
	$a = new Article();
	$id = $_GET['id'];
	$a->getArticle($id);

?>
<h2 class="page-title"><?php echo $a->_titre; ?></h2>
<div class="row" id="content">
	<div class="col-md-9" id="content_text">
		<?php echo $a->_texte; ?>
	</div>
	<div class="col-md-3 hidden-xs" id="sidebar">
		<?php echo $a->_d_ajout ?>
	</div>
</div>

<?php

	require_once("footer.inc.php"); ?>
