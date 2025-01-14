<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux-Ventus-Home-HighFidelity</title>
    <link rel="stylesheet" href=".style.css"/>
  <link rel="stylesheet" href="b-style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Ubuntu:wght@500&display=swap" rel="stylesheet">

</head>
<body>

    <header class="header">
        <div class="container">
          <div class="header-flex">
            <img src="./first-section-image/Logo.jpg" alt="Logo" />
            <nav>
              <a href="#">Fashion</a>
              <a href="#">Lifestyle</a>
              <a href="#">Spritual</a>
              <a href="#">Mental Helth</a>
              <button>Contact Us</button>
              <img src="img/lupa.png" alt="img">
          </nav>
            
          </div>
        </div>
      </header>
     
       <section class="first-section">
        <div class="first-section content">
          <h1> LUX VENTUS MAGAZINE </h1>  
          <h2 class="main-title"> We Are the <span> Ventus Fashion </span>  </h2>
          <p class="description"> We like to gossip about everything, but we will never forget the daily fashion dose.</p>
        </div>
        </section>
        
        <section class="topics">
        <h2>Topics</h2>
        <div class="allblocks">
        foreach($cards as $card){
                echo '<div class="cards">
        <div class="card">
          <img src="' . $card['image'] . '" alt=""  />
          <h4>'. $card['title'] .'</h4>
          <button class="button">
            ' . $card['button'] . '
            <a href=""> </a>
          </button>
        </div>
        '; } ?>

            <!-- <div class="card">
                <img src="img/div 1.png" alt="">
                <h3>Lingerie</h3>
                <a href="#" class="button"> View More</button>
            </div>

            <div class="card">
                <img src="img/div 2.png" alt="">
                <h3>Spring</h3>
                <a href="#" class="button">View More</button>
            </div>

            <div class="card">
                <img src="img/div 3.png" alt="">
                <h3>Yoga</h3>
                <a href="#" class="button">View More</button>
            </div>

            
            <div class="card">
                <img src="img/div 4.png" alt="">
                <h3>Glove</h3>
                <a href="#" class="button">Viev More</button>
            </div>

                
            <div class="card">
                <img src="img/div 5.png" alt="">
                <h3>Ensembles</h3>
                <a href="#" class="button"> Viev More</button>
            </div>

            <div class="card">
                <img src="img/div 6.png" alt="">
                <h3>Skin Care</h3>
                <a href="#" class="button">Viev More</button>
            </div> -->
        </div>
        <hr>
        <?php
           
      
        
    
    
<section>
  <div class="fashion">
    <img src="img/fashion 111.png" alt="img">
    <img class="img2" src="img/little pic.png" alt="img">
    <div class="h5">
        <h5>Mallory Reyn</h5>
        <h5>April 14th, 2023</h5>
        <h5 class="h5_1">COMING IN HOT!</h5>
        </div>
        <h2>The Latest Trends from the Moon Fashion Week.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. <br>
            Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae <br>
            mattis tellus. Nullam quis imperdiet augue. Vestibulum.</p>
            <img class="arrow" src="img/arrow-small-right.png" alt="">
            <a id="a1" href="#">Read more</a>
</div>
</section>









<section class="trending">
<h2>Trending</h2>

<div class="div1">
<img class="img1" src="img/Mask group.png" alt="img">
<img class="img2" src="img/little pic.png" alt="img">
<div class="h5">
<h5>Mallory Reyn</h5>
<h5>April 14th, 2023</h5>
</div>
<h3>10 Things to help you with<br>
    social stress.</h3>
    <p>Lorem ipsum dolor sit amet, consectetur <br>
        Pellentesque sit amet sapien fringilla, mattis<br>
        mattis tellus. Nullam quis imperdiet augue. <br>
        Vestibulum.</p>
        <img class="arrow" src="img/arrow-small-right.png" alt="">
        <a class="a1" href="#">Read more</a>
        <button>LIFESTYLE</button>
</div>

<div class="div2">
<img class="img1" src="img/Mask group 2.png" alt="img">
<img class="img2" src="img/little pic.png" alt="img">
<div class="h5">
<h5>Mallory Reyn</h5>
<h5>April 14th, 2023</h5>
</div>
<h3>10 Things to help you with<br>
    social stress.</h3>
    <p>Lorem ipsum dolor sit amet, consectetur <br>
        Pellentesque sit amet sapien fringilla, mattis<br>
        mattis tellus. Nullam quis imperdiet augue. <br>
        Vestibulum.</p>
        <img class="arrow" src="img/arrow-small-right.png" alt="">
        <a class="a1" href="#">Read more</a>
        <button>SUMMER</button>
</div>

<div class="div3">
<img class="img1" src="img/two girls.png" alt="img">
<img class="img2" src="img/little pic.png" alt="img">
<div class="h5">
<h5>Mallory Reyn</h5>
<h5>April 14th, 2023</h5>
</div>
<h3>5 Reasons to avoid shopping on<br>
     saturdays</h3>
    <p>Lorem ipsum dolor sit amet, consectetur <br>
        Pellentesque sit amet sapien fringilla, mattis<br>
        mattis tellus. Nullam quis imperdiet augue. <br>
        </p>
        <img class="arrow" src="img/arrow-small-right.png" alt="">
        <a class="a1" href="#">Read more</a>
        <button>FASHION</button>
</div>

<div class="div4">
<img class="img1" src="img/girl 1.png" alt="img">
<img class="img2" src="img/little pic.png" alt="img">
<div class="h5">
<h5>Mallory Reyn</h5>
<h5>April 14th, 2023</h5>
</div>
<h3>10 Brands that remained<br>
    faithful to your classy look.</h3>
    <p>Lorem ipsum dolor sit amet, consectetur <br>
        Pellentesque sit amet sapien fringilla, mattis<br>
        mattis tellus. Nullam quis imperdiet augue. <br>
        </p>
        <img class="arrow" src="img/arrow-small-right.png" alt="">
        <a class="a1" href="#">Read more</a>
        <button>ENSEMBLES</button>
</div>

<div class="div5">
<img class="img1" src="img/girl 2.png" alt="img">
<img class="img2" src="img/little pic.png" alt="img">
<div class="h5">
<h5>Mallory Reyn</h5>
<h5>April 14th, 2023</h5>
</div>
<h3>10 Brands that remained<br>
    faithful to your classy look.</h3>
    <p>Lorem ipsum dolor sit amet, consectetur <br>
        Pellentesque sit amet sapien fringilla, mattis<br>
        mattis tellus. Nullam quis imperdiet augue. <br>
        </p>
        <img class="arrow" src="img/arrow-small-right.png" alt="">
        <a class="a1" href="#">Read more</a>
        <button>MENTAL HELTH</button>
</div>
</section>




<footer>
<img src="img/header logo.png" alt="">
<h2>Let’s Hang Out</h2>
<div class="social">
    <img id="img1" src="img/facebook.png" alt="">
    <img id="img2" src="img/instagram.png" alt="">
    <img id="img3" src="img/linkedin.png" alt="">
    <img id="img4" src="img/twitter.png" alt="">
    <img id="img5" src="img/youtube.png" alt="">
    
</div>
<hr>
<p>© 2023 - Lux Ventus by Zine.E.Falouti</p>
</footer>




</body>
</html>