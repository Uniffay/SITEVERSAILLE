<?php include_once('includes/header.php') ?>

<body>
  <?php session_start();
  if (!isset($_SESSION['username'])) {
    include_once('includes/navbar.php');
  } else {
    include_once('includes/navbar-connected.php');
  } ?>
  <!--Milieu de la page contenant deux parties-->
  <div class="row">
    <!--Partie gauche du milieu de la page-->
    <div class="main">
      <h1><?php echo bienvenue ?></h1>
      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="Images/Versaille.jpg" style="width:100%">
          <div class="text">Versailles</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="Images/Chateau.jpg" style="width:100%">
          <div class="text">Château</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="Images/Jardin.jpg" style="width:100%">
          <div class="text">Jardin</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>

      <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {
            slideIndex = 1
          }
          if (n < 1) {
            slideIndex = slides.length
          }
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex - 1].style.display = "block";
          dots[slideIndex - 1].className += " active";
        }

        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {
            slideIndex = 1
          }
          slides[slideIndex - 1].style.display = "block";
          setTimeout(showSlides, 10000); // Change image every 10 seconds
        }
      </script>
    </div>
    <!--Fin de la partie gauche du milieu de la page-->
    <!--Partie gauche du milieu de la page-->
  </div>
  <!--Fin du milieu de la page-->
  <?php include_once('includes/footer.php') ?>
</body>

</html>