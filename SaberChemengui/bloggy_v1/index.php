<?php require_once("header.inc.php");
	require_once('classes/Article.php');
	$a = new Article();
	$liste = $a->liste();

	foreach ($liste as $item) {
		?>

		<div class="row" id="content">
			<div class="col-md-9" id="content_text">
				<?php echo $item->_titre ; ?> <a href="article.php?id=<?php echo $item->_id; ?>">...</a>
			</div>
			<div class="col-md-3 hidden-xs" id="sidebar">
				<?php echo $item->_d_ajout ?>
			</div>
		</div>

		<?php
	}
	require_once("footer.inc.php"); ?>
