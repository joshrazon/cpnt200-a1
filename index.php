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

    <div class="hero-container">
      <div class="hero-img">
        <img src="./assets/img/hero-bg.jpg" alt="">
      </div>
    </div>

    <!-- Long Form  -->
    <div class="wrapper">
      <div class="long-form-container">
        <div class="long-form-text">
          <h1>Lorem, ipsum dolor.</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum perspiciatis quidem facere nobis quia dolorem quo, natus voluptatem voluptatibus aut facilis odit magnam quod illum dolor tenetur libero veritatis numquam distinctio omnis impedit neque. Atque expedita at, eum necessitatibus recusandae dignissimos neque deserunt aperiam, eos facilis dolores illo! Dolor.</p>
          <br>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nobis facilis corporis fugiat omnis reiciendis! Dignissimos debitis doloremque adipisci nam commodi, omnis sequi ad aut numquam blanditiis ipsum, deleniti eveniet magni dicta tempore esse fuga quis officia! Dolore libero fugit fuga omnis nihil repellat quo dolor ducimus, quos nobis sit.</p>
        </div>
        <div class="long-form-img">
          <img src="./assets/img/croissant.jpg" alt="">
        </div>
      </div>
    </div>

    <!-- Bakery Info -->
    <div class="info-container">
      <!-- Hours -->
      <h1>Open Hours</h1>
      <div class="info">
        <ul class="days">
          <li>Monday - Friday</li>
          <li>Weekends</li>
          <li>Holidays</li>
        </ul>
        <ul class="hours">
          <li>9AM - 8PM</li>
          <li>9AM - 6PM</li>
          <li>CLOSED</li>
        </ul>
      </div>
 
      <!-- Policy -->
      <h1>COVID-19 POLICY</h1>
      <div class="info">
        <ul>
          <li><strong>Keeping You Safe</strong></li>
          <li>Information on how we're keeping our teams and our customers happy and safe during this time. </li>
          <li><button>COVID-19 POLICY</button></li>
        </ul>
      </div>

      <!-- Reserve-Info -->
      <h1>Reservations</h1>
      <div class="info">
        <ul>
          <li>404 SOMEWHERE ST, PROVINCE A1B 2C3</li>
          <li>Tel: (123)-456-7890  </li>
          <li><button>EMAIL</button></li>
        </ul>
      </div>
    </div>

    <!-- Story  -->
    <div class="story">
      <h1 class="story-section">Our Story</h1>
      <div class="story-container">
        <div class="story-text">
          <h1>Lorem, ipsum dolor.</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil rerum perspiciatis quidem facere nobis quia dolorem quo, natus voluptatem voluptatibus aut facilis odit magnam quod illum dolor tenetur libero veritatis numquam distinctio omnis impedit neque. Atque expedita at, eum necessitatibus recusandae dignissimos neque deserunt aperiam, eos facilis dolores illo! Dolor.</p>
          <br>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur nobis facilis corporis fugiat omnis reiciendis! Dignissimos debitis doloremque adipisci nam commodi, omnis sequi ad aut numquam blanditiis ipsum, deleniti eveniet magni dicta tempore esse fuga quis officia! Dolore libero fugit fuga omnis nihil repellat quo dolor ducimus, quos nobis sit.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus, vel quisquam at magni corporis architecto et nesciunt expedita inventore optio blanditiis est ducimus assumenda in? Consectetur nostrum laudantium laborum.</p>
          <br>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione cupiditate pariatur soluta laborum perferendis ea, molestias quasi consequatur? Illum pariatur, suscipit vero dolore alias dignissimos.</p>
          <br>
          <p><em>-Owner</em></p>
        </div>
        <div class="story-img">
          <img src="./assets/img/fresh2.png" alt=""> 
          <div class="gallery-link">
            <a href="gallery.html">Our Gallery</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php include 'includes/footer.php' ?>
</body>
</html>