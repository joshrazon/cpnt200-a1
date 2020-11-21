<!-- Include _config.php above the <!DOCTYPE html> -->
<?php 
  include 'includes/head.php';
  
  // Define page title
  $page_title = 'Our Team';

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
  
  <!-- Card -->
  <div class="contact-container">
    <h2>MEMBERS</h2>
    <div class="member-section">
      <div class="team-deck">
        <div class="card card1">
          <img src="./assets/img/team/resized/owner.jpg" alt="">
          <div class="card-text">
            <h3>Roland Berry</h3>
            <p>Owner</p>
          </div>
        </div>
        <div class="card card2">
          <img src="./assets/img/team/resized/front-of-house-manager.jpg" alt="">
          <div class="card-text">
            <h3>Barney Tait</h3>
            <p>Front of House</p>
          </div>
        </div>
        <div class="card card3">
          <img src="./assets/img/team/resized/kitchen-manager.jpg" alt="">
          <div class="card-text">
            <h3>John Baker</h3>
            <p>Kitchen Manager</p>
          </div>  
        </div>
        <div class="card card4">
          <img src="./assets/img/team/resized/hr-manager.jpg" alt="">
          <div class="card-text">
            <h3>Nicole Adams</h3>
            <p>Human Resources</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Icons -->
    <h2>CONTACT</h2>
    <div class="contact-section">
      <div class="icon-container">
        <section class="contact-info">
          <i class="fas fa-map-marker-alt"></i>
          <div class="text">
            <h4>Location</h4>
            <p>404 SOMEWHERE ST, PROVINCE A1B 2C3</p>
          </div>
        </section>
        <section class="contact-info">
          <i class="far fa-envelope"></i>
          <div class="text">
            <h4>Email</h4>
            <p>email@email.com</p>
          </div>
        </section>
        <section class="contact-info">
          <i class="fas fa-phone-alt"></i>
          <div class="text">
            <h4>Phone</h4>
            <p>(123)-465-7890</p>
          </div>
        </section>
      </div>

      <!-- Form -->
      <div class="form-container">
        <form action="#">
          <div>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Your Email">
          </div>
          <input type="text" placeholder="Subject">
          <textarea rows="4" placeholder="Message"></textarea>
          <button>Send Message</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'includes/footer.php' ?>
</body>
</html>