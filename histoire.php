<!DOCTYPE html>
<html>
  <?php include_once('includes/header.php') ?>
  <body>
    <?php include_once('includes/navbar.php')?>
    <div class="main">

      <h1><?php echo frise_histoire;?></h1>
       <?php
          if($_COOKIE["lang"] === "fr"){
              echo "<img class = \"frise\" src=\"Images/frise.png\" alt=\"Frise\" usemap=\"#image-map\"/>";
          }
          else{
              echo "<img class = \"frise\" src=\"Images/frise_eng.png\" alt=\"Frise\" usemap=\"#image-map\"/>";
          }?>
      <map name="image-map">
          <area alt="LouisXIII" title="LouisXIII" href="Chateau.php#LouisXIII" coords="311,43,459,145">
          <area alt="LouisXIV" title="LouisXIV" href="Chateau.php#LouisXIV" coords="311,145,459,335" shape="rect">
          <area alt="LouisXV" title="LouisXV" href="Chateau.php#LouisXV" coords="311,335,459,480" shape="rect">
          <area alt="LouisXVI" title="LouisXVI" href="Chateau.php#LouisXVI" coords="311,479,459,544" shape="rect">
          <area alt="1792-1804" title="1792-1804" href="Chateau.php#Révolution" coords="311,544,459,571" shape="rect">
          <area alt="1erEmpire" title="1erEmpire" href="Chateau.php#19e" coords="311,571,459,597" shape="rect">
          <area alt="LouisXVIII" title="LouisXVIII" href="Chateau.php#19e" coords="311,598,459,621" shape="rect">
          <area alt="1815-1830" title="1815-1830" href="Chateau.php#19e" coords="311,622,459,647" shape="rect">
          <area alt="Louis-Philippe" title="Louis-Philippe" href="Chateau.php#19e" coords="311,647,459,691" shape="rect">
          <area alt="1848-1870" title="1848-1870" href="Chateau.php#19e" coords="311,690,459,738" shape="rect">
          <area alt="3iemeRepublique" title="3iemeRepublique" href="Chateau.php#19e" coords="311,739,459,913" shape="rect">
          <area alt="1940-1958" title="1940-1958" href="Chateau.php#Aujourd'hui" coords="311,914,459,959" shape="rect">
          <area alt="5emeRepublique" title="5emeRepublique" href="Chateau.php#Aujourd'hui" coords="311,960,459,959,459,1042,385,1115,311,1042" shape="poly">
      </map>
    </div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>
