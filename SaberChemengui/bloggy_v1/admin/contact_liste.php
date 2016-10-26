<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Contact</h2>
					<?php
					if (isset($_GET['retour']))
					{
						if ($_GET['retour']==1) {
						
						?>
						<div class="alert alert-success">
						  Le sujet a bien été supprimée.
						</div>
						<?php
					}}
					?>
					<table class="display table table-striped table-bordered table-hover table-list" cellspacing="0" width="100%">
						<!-- Entete du tableau, à ne PAS modifier -->
						<thead>
							<tr>
								<th width="10px">#</th>
								<th>E-mail</th>
								<th>Sujet</th>
								<th>Date</th>
								<th width="100px"></th>
							</tr>
						</thead>
						<!-- Début de la liste -->
						<tbody>
							<!-- ** Début de la boucle sur le résultat de la requête SQL ** -->
							<?php 
								require_once('../classes/Contact.php');
								$contact=new Contact();
								$list=$contact->liste();
								
									foreach ($list as $item) {
										?>
										<tr>
										<td><?php echo $item->_id ?></td>
										<td><?php echo $item->_email ?></td>
										<td><?php echo $item->_sujet ?></td>
										<td><?php echo $item->_d_ajout ?></td>
										<td><a href="contact_supp.php?id=<?php echo $item->_id ; ?>"  class="btn btn-danger btn-xs" onclick=" return confirm('Supprimer?')">Suprimer</a></td>
										</tr>
									<?php } ?>
									


						</tbody>
						<!-- Fin de la liste -->
					</table>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>
