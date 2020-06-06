<!DOCTYPE html>
<html>
  <?php include_once('includes/header.php') ?>
  <body>
    <?php include_once('includes/navbar.php')?>
    <div class="main">

      <h1><?php echo frise_histoire;?></h1>
       <?php
          if($_GET["lang"] === "fr"){
              echo "<img class = \"frise\" src=\"Images/frise.png\" alt=\"Frise\" usemap=\"#image-map\"/>";
          }
          else{
              echo "<img class = \"frise\" src=\"Images/frise_eng.png\" alt=\"Frise\" usemap=\"#image-map\"/>";
          }?>
      <map name="image-map">
          <area target="_blank" alt="LouisXIII" title="LouisXIII" href="LouisXIII" coords="311,43,459,145" shape="rect">
          <area target="_blank" alt="LouisXIV" title="LouisXIV" href="LouisXIV" coords="311,145,459,335" shape="rect">
          <area target="_blank" alt="LouisXV" title="LouisXV" href="LouisXV" coords="311,335,459,480" shape="rect">
          <area target="_blank" alt="LouisXVI" title="LouisXVI" href="LouisXVI" coords="311,479,459,544" shape="rect">
          <area target="_blank" alt="1792-1804" title="1792-1804" href="1792-1804" coords="311,544,459,571" shape="rect">
          <area target="_blank" alt="1erEmpire" title="1erEmpire" href="1erEmpire" coords="311,571,459,597" shape="rect">
          <area target="_blank" alt="LouisXVIII" title="LouisXVIII" href="LouisXVIII" coords="311,598,459,621" shape="rect">
          <area target="_blank" alt="1815-1830" title="1815-1830" href="1815-1830" coords="311,622,459,647" shape="rect">
          <area target="_blank" alt="Louis-Philippe" title="Louis-Philippe" href="Louis-Philippe" coords="311,647,459,691" shape="rect">
          <area target="_blank" alt="1848-1870" title="1848-1870" href="1848-1870" coords="311,690,459,738" shape="rect">
          <area target="_blank" alt="3iemeRepublique" title="3iemeRepublique" href="3emeRepublique" coords="311,739,459,913" shape="rect">
          <area target="_blank" alt="1940-1958" title="1940-1958" href="1940-1958" coords="311,914,459,959" shape="rect">
          <area target="_blank" alt="5emeRepublique" title="5emeRepublique" href="5emeRepublique" coords="311,960,459,959,459,1042,385,1115,311,1042" shape="poly">
      </map>
    </div>
    <?php include_once('includes/footer.php') ?>
  </body>
</html>
