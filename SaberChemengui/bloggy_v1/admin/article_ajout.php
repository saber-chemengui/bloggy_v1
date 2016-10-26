<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Ajouter un article</h2>
					
					<form class="form-horizontal" action="article_action.php" method="POST">
					  <div class="form-group has-feedback">
					    <label class="control-label col-sm-2" for="titre" >Titre *:</label>
					    <div class="col-sm-10">
					    <input type="text" class="form-control" id="titre" name="titre" required="required"> 
					    </div>
					  </div>

					  <div class="form-group">
					  	<label class="control-label col-sm-2" for="texte">Texte *:</label>
					  	<div class="col-sm-10"><textarea class="form-control" required="required" id="texte" name="texte" ></textarea> </div>
					  </div>


					  <input type="submit" value="Envoyer" class="btn btn-default">
					</form>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
