<!-- Include _config.php above the <!DOCTYPE html> -->
<?php 
  include 'includes/head.php';

  // Define page title
  $page_title = 'Razon\'s';

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

  <!-- form -->
  <div class="hero">
    <div class="flex-container">
      <form action="#">
        <fieldset>
          <legend>Sign-in</legend>
          <label for="email">Email*</label>
          <input type="email" required placeholder="Enter your email" name="email" id="email">
          <label for="password">Password*</label>
          <input type="password" required placeholder="Enter your pasword" name="password" id="password">
          <button type="submit">Sign-in</button>
        </fieldset>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'includes/footer.php' ?>
</body>
</html>