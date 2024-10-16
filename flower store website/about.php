<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>From every day to the extraordinary, Pankhudi helps you convey your love with fresh blooms. Pankhudi's Same Day Flowers Delivery in India is all you need. Every time you send flowers online to your loved ones, you get a chance to browse through endless gift options.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p> We at Pankhudi deliver the best quality - fresh cut flowers in more than 229+ cities across India with the help of our strong affiliate network and channel stores. Each and every one of our flowers is handpicked at the right stage of bloom by our expert florists in your cities.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum odit voluptatum alias sed est in magni nihil nisi deleniti nostrum.</p>
            <a href="#reviews" class="btn">Team Members</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Team</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/zaid.jpeg" alt="">
            <p>Currently Pursuing Information Technology from one of the best college Shree L.R.Tiwari college of Engineering.Working as Web Developer for more than 2 years .</p>
           <!-- <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>!-->
            <h3>Khan Zaid</h3>
        </div>

        <div class="box">
            <img src="images/ankit.jpeg" alt="">
            <p>Currently studying in Shree.L.R.Tiwari College of Engineering.Fluent with Sql.Currently pursuing information Technology.</p>
          <!--  <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>!-->
            <h3>Yadav Ankit</h3>
        </div>

        <div class="box">
            <img src="images/kaif.jpeg" alt="">
            <p>Currently Studying in Shree L.R.Tiwari college of Engineering.Pursuing Information Technology.Had Worked with cyber security team for more than 2 years .</p>
            <!--<div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>!-->
            <h3>Mohammed Kaif</h3>
        </div>
    </div>
</section>

<section class="revie" id="revie">
 <h1 class="zaid">Client review</h1>
 <div class="box-container">
        <div class="box">
            <img src="images/TopG.jpeg" alt="">
            <p>Quick on time delivery, fresh flowers fantastic through out
It's recommended by Top G</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Andrew Tate(TopG)</h3>
        </div> 

        <div class="box">
            <img src="images/Harsh.jpeg" alt="">
            <p>Thank you for the timely delivery good experience with pankhudi.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Harsh</h3>
        </div>

        <div class="box">
            <img src="images/Piyush.jpeg" alt="">
            <p>Prompt quick delivery. Flowers as described. Very happy with the service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Piyush </h3>
        </div>

    </div>
</div>
</section>










<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>