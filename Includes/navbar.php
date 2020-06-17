<?php
  function testActive($string){
    $url = $_SERVER["PHP_SELF"];
    $url = strtok($url, '?');
    if ($string == basename($url)) {
      return "class=\"active\"";
    }
    return "";
  }

  function testActiveSsClass($string){
    $url = $_SERVER["PHP_SELF"];
    $url = strtok($url, '?');
    if ($string == basename($url)) {
      return "active";
    }
    return "";
  }

  function testActiveLang($string){
    if (!empty($_COOKIE["lang"])) {
      if ($_COOKIE["lang"] == $string) {
        return "class=\"active\"";
      }
    }
    return "";
  }
?>
<!--Barre de navigation-->
<div id="navbar" class="navbar">
    <ul class="navbar">
        <li <?php echo testActive("index.php") ?>><a href="index.php"> <?php echo accueil ?> </a></li>
        <li class="<?php if (testActiveSsClass("Chateau.php") != "active") {
                           if (testActiveSsClass("Visite.php") == "active") {
                             echo "active ";
                           }
                         }
                         else {
                           echo "active ";
                         }
                         ?>dropdown">
            <a href="javascript:void(0)" class="dropbtn"> <?php echo information ?> </a>
            <div id="navbarInfo" class="dropdown-content">
                <a <?php echo testActive("Chateau.php") ?> href="Chateau.php"><?php echo chateau ?></a>
                <a <?php echo testActive("Visite.php") ?> href="Visite.php"><?php echo visite ?></a>
            </div>
        </li>
        <li><a <?php echo testActive("histoire.php") ?> href="histoire.php"><?php echo histoire ?></a></li>
        <li><a <?php echo testActive("prepvisite.php") ?> href="prepvisite.php"><?php echo prepvisite ?></a></li>
        <li><a <?php echo testActive("galerie.php") ?> href="galerie.php"><?php echo galeriephoto ?></a></li>
        <li class="<?php if (testActiveSsClass("login.php") != "active") {
                           if (testActiveSsClass("register.php") == "active") {
                             echo "active ";
                           }
                         }
                         else {
                           echo "active ";
                         }
                         ?>dropdown">
            <a href="javascript:void(0)" class="dropbtn"> <?php echo compte ?> </a>
            <div id="navbarCompte" class="dropdown-content">
                <a <?php echo testActive("login.php") ?> href="login.php"><?php echo connect ?></a>
                <a <?php echo testActive("register.php") ?> href="register.php"><?php echo inscrire ?></a>
            </div>
        </li>
        <li><a <?php echo testActive("quisommesnous.php") ?> href="quisommesnous.php"><?php echo quisommesnous ?></a></li>
        <li><a <?php echo testActiveLang("fr") ?> href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=fr">
                <img class="imgNavHea" src="Images/francais.png" height="16px" width="25px" alt="eng" align="center" style="margin: 0" /></a>
            <li />
        <li><a <?php echo testActiveLang("en") ?> href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=en">
                <img class="imgNavHea" src="Images/anglais.png" height="16px" width="25px" alt="eng" align="center" style="margin: 0" /></a>
            <li />
    </ul>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="navbarMobile" class="topnav">
  <a <?php echo testActiveLang("fr") ?> href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=fr">
    <img class="imgNavHea" src="Images/francais.png" height="16px" width="25px" alt="eng" align="center" style="margin: 0" /></a>

    <a <?php echo testActiveLang("en") ?> href="<?php echo $_SERVER["PHP_SELF"]; ?>?lang=en">
      <img class="imgNavHea" src="Images/anglais.png" height="16px" width="25px" alt="eng" align="center" style="margin: 0" /></a>
      <a class="icon" href="javascript:void(0);" onclick="showMenu()">
        <i class="fa fa-bars"></i>
      </a>
  <div id="myLinks" class="topnav">
      <ul>
          <li <?php echo testActive("index.php") ?>><a href="index.php"> <?php echo accueil ?> </a></li>
          <li class="<?php if (testActiveSsClass("Chateau.php") != "active") {
                                           if (testActiveSsClass("Visite.php") == "active") {
                                             echo "active ";
                                           }
                                         }
                                         else {
                                           echo "active ";
                                         }
                                         ?>dropdown">
              <a href="javascript:void(0)" class="dropbtn" onclick="showMenuInformation()"> <?php echo information ?> </a>
              <div id="myLinksInformation" class="dropdown-content">
                  <a <?php echo testActive("Chateau.php") ?> href="Chateau.php"><?php echo chateau ?></a>
                  <a <?php echo testActive("Visite.php") ?> href="Visite.php"><?php echo visite ?></a>
              </div>
          </li>
          <li><a <?php echo testActive("histoire.php") ?> href="histoire.php"><?php echo histoire ?></a></li>
          <li><a <?php echo testActive("prepvisite.php") ?> href="prepvisite.php"><?php echo prepvisite ?></a></li>
          <li><a <?php echo testActive("galerie.php") ?> href="galerie.php"><?php echo galeriephoto ?></a></li>
          <li class="<?php if (testActiveSsClass("login.php") != "active") {
                             if (testActiveSsClass("register.php") == "active") {
                               echo "active ";
                             }
                           }
                           else {
                             echo "active ";
                           }
                           ?>dropdown">
              <a href="javascript:void(0)" class="dropbtn" onclick="showMenuCompte()"> <?php echo compte ?> </a>
              <div id="myLinksCompte"  class="dropdown-content">
                  <a <?php echo testActive("login.php") ?> href="login.php"><?php echo connect ?></a>
                  <a <?php echo testActive("register.php") ?> href="register.php"><?php echo inscrire ?></a>
              </div>
          </li>
          <li><a <?php echo testActive("quisommesnous.php") ?> href="quisommesnous.php"><?php echo quisommesnous ?></a></li>

      </ul>
    </div>
</div>
<script>
  window.onscroll = function() {stickyNavBar()};

  var navbar = document.getElementById("navbar");
  var navbarMobile = document.getElementById("navbarMobile");
  var navbarInfo = document.getElementById("navbarInfo");
  var navbarCompte = document.getElementById("navbarCompte");
  var sticky = navbar.offsetTop;

  function stickyNavBar() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
      navbarInfo.style.position = "fixed";
      navbarCompte.style.position = "fixed";
    } else {
      navbar.classList.remove("sticky");
      navbarInfo.style.position = "absolute";
      navbarCompte.style.position = "absolute";
    }
  }

  function showMenu() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
      x.classList.remove("active");
    } else {
      x.style.display = "block";
      x.classList.add("active");
    }
  }

  function showMenuInformation() {
    var x = document.getElementById("myLinksInformation");
    if (x.style.display === "contents") {
      x.style.display = "none";
      x.classList.remove("active");
    } else {
      x.style.display = "contents";
      x.classList.add("active");
    }
  }

  function showMenuCompte() {
    var x = document.getElementById("myLinksCompte");
    if (x.style.display === "contents") {
      x.style.display = "none";
      x.classList.remove("active");
    } else {
      x.style.display = "contents";
      x.classList.add("active");
    }
  }
</script>
<!--Fin de la barre de navigation-->
