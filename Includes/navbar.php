<!--Barre de navigation-->
<div class="navbar">
    <ul class="navbar">
        <li><a href="index.php"> <?php echo accueil?> </a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> <?php echo information?> </a>
                    <div class="dropdown-content">
                        <a href="Chateau.php"><?php echo chateau?></a>
                        <a href="Visite.php"><?php echo visite?></a>
                    </div>
            </li>
            <li><a href="histoire.php"><?php echo histoire?></a></li>
            <li><a href="prepvisite.php"><?php echo prepvisite?></a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn"> <?php echo compte?> </a>
                    <div class="dropdown-content">
                        <a href="login.php"><?php echo connect?></a>
                        <a href="register.php"><?php echo inscrire?></a>
                    </div>
            </li>
          <li><a href="quisommesnous.php"><?php echo quisommesnous?></a></li>
          <li><a href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=fr">
          <img src="Images/francais.png" height = "16px"
          width = "25px" alt="eng" align = "center" style = "margin: 0"/></a><li/>
          <li><a href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=en">
          <img src="Images/anglais.png" height = "16px"
          width = "25px" alt="eng" align = "center" style = "margin: 0"/></a><li/>
    </ul>
</div>
<!--Fin de la barre de navigation-->
