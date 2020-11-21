<!-- Include _config.php above the <!DOCTYPE html> -->
<?php 
  include 'includes/head.php';

  // Define page title
  $page_title = 'Gallery';

?>

<!DOCTYPE html>
<html lang="en">
  <!-- Head -->
<?php include 'includes/head.php' ?>
<body>
  <!-- Hero Section -->
  <?php include 'includes/header.php' ?>
  <!-- nav -->
  <?php include 'includes/nav.php' ?>
  <!-- Gallery -->
  <div class="gallery-container">
    <div class="grid-gallery">
      <img src="./assets/img/gallery/gallery.jpg" alt="">
      <img src="./assets/img/gallery/gallery2.jpg" alt="">
      <img src="./assets/img/gallery/gallery4.jpg" alt="">
      <img src="./assets/img/gallery/gallery6.jpg" alt="">
      <img src="./assets/img/gallery/gallery5.jpg" alt="">
      <img src="./assets/img/gallery/gallery3.jpg" alt="">
      <img src="./assets/img/gallery/gallery7.jpg" alt="">
      <img src="./assets/img/gallery/gallery8.jpg" alt="">
      <img src="./assets/img/gallery/gallery9.jpg" alt="">
    </div>
  </div>
  <br>

  
  <!-- Footer -->
  <?php include 'includes/footer.php' ?>
</body>
</html>