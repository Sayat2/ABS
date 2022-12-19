<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ABS Education</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://kit.fontawesome.com/262b966825.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
</head>
<body> 
<section class="header">
   <a href="home.php" class="logo">ABS Education School</a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="buy.php">buy</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>buy now</h1>
</div>

<section class="booking">

   <h1 class="heading-title">buy and become the best programmer!</h1>
   <h2>You can leave a message. We will contact you. Thanks!</h2>
   <form action="submit.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>course name:</span>
            <input type="text" placeholder="Write the name of the course" name="crsname">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>  


</section>


<section class="footer">
<div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="buy.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="https://mail.google.com/mail/u/1/#inbox?compose=new"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="https://policies.google.com/privacy?hl=en-US"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="https://termly.io/legal-dictionary/terms-of-use/#:~:text=Terms%20of%20use%20are%20the,or%20%E2%80%9Cterms%20and%20conditions%E2%80%9D."> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +7-747-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +7-700-222-3333 </a>
         <a href="https://mail.google.com/mail/u/1/#inbox?compose=new"> <i class="fas fa-envelope"></i> id@stu.sdu.edu.kz </a>
         <a href="https://e.mail.ru/compose/"> <i class="fas fa-map"></i> Almaty, Kazakhstan - 050000 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.instagram.com/whk_cd/"> <i class="fab fa-instagram"></i> instagram of Sayat</a>
         <a href="https://www.instagram.com/bayan.sullu/"> <i class="fab fa-instagram"></i> instagram of Bayan</a>
         <a href="https://www.instagram.com/awesomeaydana/"> <i class="fab fa-instagram"></i> instagram of Aidana</a>
         <a href="https://www.instagram.com/sdukz/"> <i class="fab fa-instagram"></i> instagram of SDU</a>
      </div>

   </div>

   <div class="credit"> created by team <span>Legends of Jaksylyk</span> </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>