<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>VIT Bhopal E-learning is an online learning platform that offers students access to a variety of educational resources, including online courses, video lectures, interactive simulations, and collaborative tools. Developed and taught by experienced faculty members, the platform provides students with a comprehensive and flexible learning experience that fosters academic success. With its user-friendly interface and cutting-edge technology, VIT Bhopal E-learning enables students to access educational resources from anywhere, at any time, empowering them to learn at their own pace and on their own schedule. Whether students seek to enhance their academic skills, pursue new interests, or advance their careers, VIT Bhopal E-learning provides a valuable and engaging learning experience.</p>
         <a href="courses.php" class="inline-btn">Our Courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>20+</h3>
            <span>Online Courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>25k+</h3>
            <span>Brilliants Students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>10+</h3>
            <span>Expert Teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Job Placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>VIT Bhopal E-learning is a game-changer in the world of online education. The platform's high-quality courses, expert faculty members, and engaging multimedia tools provide a comprehensive and flexible learning experience that empowers students to achieve their academic goals.</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Vandana Ranjan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I have been using VIT Bhopal E-learning for several months now, and I am impressed with the platform's user-friendly interface and diverse range of educational resources. The courses are well-structured, and faculty members in a supportive and interactive learning community.</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Shubham Raj</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>VIT Bhopal E-learning has transformed my learning experience. The platform's video lectures and interactive simulations have helped me to understand complex concepts, and the online courses have allowed me to pursue my academic interests on my own schedule</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Ashish Kumar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>VIT Bhopal E-learning is a fantastic resource for students seeking to advance their careers. The platform's courses cover a wide range of topics and are taught by expert faculty members, providing students with the skills and knowledge they need to succeed in their chosen fields</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Sujit Kumar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I am so grateful for VIT Bhopal E-learning. The platform's flexible schedule and engaging educational resources have allowed me to balance my studies with my other commitments, and the collaborative tools have enabled me to connect with other students.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Parul</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>VIT Bhopal E-learning is a top-notch online learning platform. The courses are well-structured, and the interactive simulations and collaborative tools have helped me to apply what I have learned in a practical and engaging way. I highly recommend this platform.</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Bhavesh Ranjan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>