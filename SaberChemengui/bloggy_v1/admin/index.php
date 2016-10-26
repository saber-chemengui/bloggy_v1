<?php require_once("header.inc.php") ?>

<div class="ts-main-content">
	<div class="content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2 class="page-title">Statistiques</h2>

					<?php
						require_once('../classes/Mysql.php');
						$mysql=new Mysql();
					?>
					<div class="alert alert-success">
						Nombre d'articles :<?php
							$res=$mysql->get_cnx()->query("SELECT COUNT(*) as nbr FROM article");
							$donnees = $res->fetch();
							echo $donnees['nbr'];
						?>
					</div>

					<div class="alert alert-success">
						Nombre de demande de contact :<?php
							$res=$mysql->get_cnx()->query("SELECT COUNT(*) as nbr FROM contact");
							$donnees = $res->fetch();
							return $donnees['nbr'];
						?>
					</div>

				</div>

			</div>
		</div>

		<?php require_once("footer.inc.php"); ?>