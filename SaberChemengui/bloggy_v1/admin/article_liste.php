<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-12">
					<a href="article_ajout.php"><button class="btn btn-default">Ajouter Article</button></a>
					<h2 class="page-title">Liste des articles</h2>
					<?php
					if (isset($_GET['retour']) && $_GET['retour']==1)
					{ ?>
						<div class="alert alert-success">
						  L'article a bien été supprimé.
						</div>
						<?php
					}
					?>
					<?php
						if (isset($_GET['insertion']) && $_GET['insertion']==1)
						{
								?>
								<div class="alert alert-success">
									L'article a bien été inséré.
								</div>
								<?php
							}
					?>
					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">#</th>
								<th>Titre</th>
								<th>Date</th>
								<th width="100px"></th>
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
							<?php 
								require_once('../classes/Article.php');
								$c=new Article();
								$liste=$c->liste();
								
									foreach ($liste as $item) {
										?>
										<tr>
										<td><?php echo $item->_id ?></td>
										<td><?php echo $item->_titre ?></td>
										<td><?php echo $item->_d_ajout ?></td>
										<td><a href="article_supp.php?id=<?php echo $item->_id ; ?>"  class="btn btn-danger btn-xs" onclick=" return confirm('Supprimer?')"">Suprimer</a>
											<a href="article_modif.php?id=<?php echo $item->_id ; ?>"  class="btn btn-success btn-xs" onclick=" return confirm('Modifier?')">Modifier</a>
										</td>
										</tr>
									<?php } ?>
									


						</tbody>
						<!-- Fin de la liste -->
					</table>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
