<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">Quick options</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">likes and comments</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">View likes</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">View comments</a>
         <p>saved playlist : <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">View bookmark</a>
      </div>
      <?php
         }else{ 
      ?>
      <!-- <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div> -->
      <div class="box tutor">
         <h3 class="title">VIT Bhopal E-learning</h3>
         <p>VIT Bhopal E-learning offers students access to a wide range of educational resources, including online courses, video lectures, interactive simulations, and collaborative tools, to enhance their learning experience and academic success.</p>
         <a href="about.php" class="inline-btn">More..</a>
      </div>
      <?php
      }
      ?>
      

      <div class="box">
         <h3 class="title">Top Categories</h3>
         <div class="flex">
            <a href="search_course.php?"><i class="fas fa-code"></i><span><b>Development</b></span></a>
            <a href="search_course.php?"><i class="fas fa-chart-simple"></i><span><b>Business</b></span></a>
            <a href="search_course.php?"><i class="fas fa-pen"></i><span><b>Design</b></span></a>
            <a href="search_course.php?"><i class="fas fa-chart-line"></i><span><b>Marketing</b></span></a>
            <a href="search_course.php?"><i class="fas fa-music"></i><span><b>Music</b></span></a>
            <a href="search_course.php?"><i class="fas fa-camera"></i><span><b>Photography</b></span></a>
            <a href="search_course.php?"><i class="fas fa-cog"></i><span><b>Software</b></span></a>
            <a href="search_course.php?"><i class="fas fa-vial"></i><span><b>Science</b></span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Popular Topics</h3>
         <div class="flex">
            <a href="https://www.w3schools.com/html/" target="_blank"><i class="fab fa-html5"></i><span><b>HTML</b></span></a>
            <a href="https://www.w3schools.com/css/" target="_blank"><i class="fab fa-css3"></i><span><b>CSS</b></span></a>
            <a href="https://www.w3schools.com/js/" target="_blank"><i class="fab fa-js"></i><span><b>Javascript</b></span></a>
            <a href="https://www.w3schools.com/REACT/DEFAULT.ASP" target="_blank"><i class="fab fa-react"></i><span><b>ReactJS</b></span></a>
            <a href="https://www.w3schools.com/php/" target="_blank"><i class="fab fa-php"></i><span><b>PHP</b></span></a>
            <a href="https://www.w3schools.com/bootstrap/" target="_blank"><i class="fab fa-bootstrap"></i><span><b>Bootstrap</b></span></a>
         </div>
      </div>

      <div class="box tutor">
         <h3 class="title">Become a Tutor</h3>
         <p><i>Personalized academic guidance from skilled educators.</i></p>
         <a href="admin/register.php" class="inline-btn">Get Started</a>
      </div>

   </div>

</section>

<!-- quick select section ends -->

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">Latest Courses</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">OPPS!! No courses added yet!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn"><b>View More</b></a>
   </div>

</section>

<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>