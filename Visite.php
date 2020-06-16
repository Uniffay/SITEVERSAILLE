<?php include_once('includes/header.php');
session_start();
if (!isset($_SESSION['username'])) {
	include_once('includes/navbar.php');
} else {
	include_once('includes/navbar-connected.php');
} ?>

<body>
	<!--Milieu de la page contenant deux parties-->
	<div class="row">
		<!--Partie gauche du milieu de la page-->
		<div class="main">
			<h1><?php echo organiser_visite ?></h1>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168125.76201210462!2d1.853839449199484!3d48.82072863645609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67d94d7b14c75%3A0x538fcc15f59ce8f!2sCh%C3%A2teau%20de%20Versailles!5e0!3m2!1sfr!2sfr!4v1578430389274!5m2!1sfr!2sfr" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" align="right"></iframe>
			<p>
				<?php echo information_visite ?>
				<br>
				<h2><?php echo horaires_visite ?></h2>
			</p>
			<p>
				> <?php echo horaires_visite2 ?>
				<br>
				> <?php echo horaires_visite3 ?>
			</p>
			<p>
				<h2><?php echo visite_visite ?></h2>
			</p>
			<p>
				> <?php echo duree_visite ?>
				<br>
				<?php echo time_visite ?>
				<br>
				<h2><?php echo type_visite ?></h2>
			</p>
			<p>
				> <?php echo site_visite ?>
				<br>
				<h2><?php echo patrimoine_visite ?></h2>
			</p>
			<p>
				> <?php echo chateau_visite ?>
				<br>
				> <?php echo jardin_visite ?>
				<br>
				> <?php echo glace_visite ?>
				<br>
				> <?php echo parc_visite ?>
				<br>
				> <?php echo ecuries_visite ?>
				<br>
				<br>
				<h2><?php echo periode_visite ?></h2>
			</p>
			<p>
				> <?php echo siecle1_visite ?>
				<br>
				> <?php echo siecle2_visite ?>
				<br>
				> <?php echo siecle3_visite ?>
			</p>
			<img src=" " />
		</div>
		<!--Fin de la partie gauche du milieu de la page-->
	</div>
	<!--Fin du milieu de la page-->
	<?php include_once('includes/footer.php') ?>
</body>

</html>