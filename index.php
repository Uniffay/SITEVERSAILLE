<!DOCTYPE html>
<html>
  <body>
  <?php include_once('includes/header.html');
        include_once('includes/navbar.html')?>

        <!--Milieu de la page contenant deux parties-->
        <div class="row">
            <!--Partie gauche du milieu de la page-->
            <div class="main">
                <h1 style="text-align: center">Bienvenue à Versailles</h1>
                <!--Slider présentation du chateau-->
                    <p>
						<img class = "chateau" src="Images/Chateau.jpg"
						alt="Château" height = "400" width = "600"
						style = "margin:0 auto;"/>
                    </p> <hr/>
                    <!--Fin du slider présentation du chateau-->
                <h1>Présentation</h1>
				<p>Le château de Versailles vu du ciel</p>
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9cGohlT3UAc?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<p>Source: Château de Versailles</p>
            </div>
            <!--Fin de la partie gauche du milieu de la page-->
            <!--Partie gauche du milieu de la page-->
            <div class="side">
            </div>
            <!--Fin de la partie droite du milieu de la page-->
        </div>
        <!--Fin du milieu de la page-->
        <?php include_once('includes/footer.html') ?>
    </body>
</html>
