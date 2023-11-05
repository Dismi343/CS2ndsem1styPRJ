<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>shop</title>
    <link rel="stylesheet" href="./shop.css" />
  </head>
  <body>
    <!-- navigation -->
    <?php 
      include_once 'header.php';
    ?>

 
    <!-- about us -->
    <section class="about">
      <h3>Welcome to CompterHub</h3>
      <h1>    
        We Love To Make Great <br />
        Things ,Things That Matter
      </h1>
      <p>
      Laptops for rent in Sri Lanka on a short or long term rentals for personal & business needs.
      You can hire even for a day or hour. Whether you want a single unit or 100s of laptops for training or workshop or anything we offer best affordable rentals across the country
      </p>
    </section>
    <!-- hero images -->
    <section class="hero-images">
      <div class="grid-iterms">
        <img src="./assets/hero-image (4).png" alt="hero-image" />
        <img src="./assets/hero-imag(1).png" alt="hero-image" />
        <img src="./assets/hero-image (5).png" alt="hero-image" />
        <img src="./assets/hero-image (2).png" alt="hero-image" />
        <img src="./assets/hero-image (3).png" alt="hero-image" />
      </div>
    </section></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    
    <!-- our numbers -->
    <section class="our-numbers">
      <h2>Our Project</h2>
      <h1>
      Introduction 
      </h1>
      <p>
      Our choice in this subject related project was to create a website. Nowadays, 
      ordering and buying goods online can be identified as a popular way to make our 
      daily activities more convenient. But our project was to create a web site where
       laptop and desktop computers can be rented as a result of the fact that our basic
        foundation was to rent out equipment using minimal online technology. Our project, 
        which was created using our specialities, html, php, java script, css and dbms... let's examine the process step by step
      </p>
      <div class="data">
        <div class="data-child">
          <h2 class="data-main">6 Members</h2>
          <p>Group</p>
        </div>
        <div class="data-child">
          <h2 class="data-main">5 Weeks</h2>
          <p>Time</p>
        </div>
        <div class="data-child">
          <h2 class="data-main">100 coffe</h2>
          <p>Enorgy</p>
        </div>
      </div>
    </section></br></br></br></br>

    <!-- itom -->

    <?php 
      include_once 'item.php';
    ?>
    </br></br></br></br></br></br></br></br>

    
    
    <!-- footer -->
    
    <footer>
      <div class="footer-data-left">
        <img src="./assets/logo-.png" alt="logo" />
        <p>
        "Empowering productivity and gaming, our laptop and desktop rental platform provides flexible, high-performance computing solutions tailored to your needs, ensuring seamless work, study, and play experiences."
        </p>
      </div>
      <div class="footer-data">
        <h2>Landings</h2>
        <p>Home</p>
        <p>Products</p>
        <p>Services</p>
      </div>
      <div class="footer-data">
        <h2>Company</h2>
        <p>Home</p>
        <p>Products</p>
        <p>Services</p>
      </div>
      <div class="footer-data">
        <h2>Resources</h2>
        <p>Home</p>
        <p>Products</p>
        <p>Services</p>
      </div>
    </footer>

  </body>
</html>