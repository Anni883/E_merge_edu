<?php
include('./maininclude/header.php');
?>
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video playsinline autoplay muted loop> 
    
            <source src="video/banvideo.mp4">
</video>
<div class="vid-overlay"></div>
      </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to E-Merge</h1>
        <small class="my-content">Learn and Implement</small> <br />
<?php

if(!isset($_SESSION['is_login']))

{echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';



}
else{

  echo '<a href="#" class="btn btn-primary mt-3">My Profile</a>';


}







?>




  
 
</div>
</div>


<div class="container-fluid bg-danger txt-banner">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5>
</div>
<div class="col-sm">
  <h5><i class="fas fa-users mr-3"></i> Expert Instructor</h5>
</div>
<div class="col-sm">
  <h5><i class="fas fa-keyboard mr-3"></i> Lifetime access</h5>
</div>
<div class="col-sm">
  <h5><i class="fas fa-keyboard mr-3"></i> Money Back Guarantee</h5>

</div>
</div>
</div>

<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>
  <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left;
    padding:0px; margin:0px;">
    <div class="card">
      <img src="image/guitar.jpg
      " class="card-img-top" alt="Guitar" />
      <div class="card-body">
        <h5 class="card-title">Learn Guitar Easy Way</h5>
        <p class="card-text">Be master in guiter learning just in few weeks and showoff your skill</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>& #8377 2000 </del></small><span #8377 2000 </del></small> <span class="font-weight-bolder">&#8377 200<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

</div>
</div>
</a><a href="#" class="btn" style="text-align: left;
    padding:0px; margin:0px;">
    <div class="card">
      <img src="image/marketing.png
      " class="card-img-top" alt="Marketing" />
      <div class="card-body">
        <h5 class="card-title">Marketing Skill AT Door</h5>
        <p class="card-text">Marketing courses teach strategies for influencing customer behavior throughout the customer lifecycle. Learn fundamentals like creating a marketing
        strategy, brand building, advertising and budget allocation, and leveraging digital and social media channels to reach your business goals.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>& #8377 2000 </del></small><span #8377 2000 </del></small> <span class="font-weight-bolder">&#8377 200<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

</div>
</div>
</a>
</div>

<a href="#" class="btn" style="text-align: left;
    padding:0px; margin:0px;">
    <div class="card">
      <img src="image/math.png
      " class="card-img-top" alt="Math" />
      <div class="card-body">
        <h5 class="card-title">Mathematics for all ages</h5>
        <p class="card-text">Basic Math skills including geometry ,algebra & calculus </p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>& #8377 2000 </del></small><span #8377 2000 </del></small> <span class="font-weight-bolder">&#8377 200<span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>

</div>
</div>
</a>

</div>
<div class="card-deck mt-4">
  <a href="#" class="btn" style="text-align: left:
  padding:0px;">
  <div class="card">
    <img src="image/space.jpg" class=card-img-top" alt="Space" />
    <div class="card-body">
      <h5 class="card-title">Space and Astronomy</h5>
      <p class="card-text">Astronomical knowlege including spaceship,rockets and universe regarding theories</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>& #8377 3000</del></small><span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a><a href="#" class="btn" style="text-align: left:
  padding:0px;">
  <div class="card">
    <img src="image/python.jpg" class=card-img-top" alt="Python" />
    <div class="card-body">
      <h5 class="card-title">Learn Python</h5>
      <p class="card-text">Enhance and upgrade the skills in Python and code in your own way.</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>& #8377 3000</del></small><span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a>
<a href="#" class="btn" style="text-align: left:
  padding:0px;">
  <div class="card">
    <img src="image/Untitled.jpg" class=card-img-top" alt="English" />
    <div class="card-body">
      <h5 class="card-title">Spoken English</h5>
      <p class="card-text">Learn English fluently just in 2 months</p>
</div>
<div class="card-footer">
  <p class="card-text d-inline">Price: <small><del>& #8377 3000</del></small><span></p> <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
</div>
</div>
</a>
</div>
<div class="text-center m-2">
  <a class="btn btn-danger btn-sm" href="#">View All Course</a>
</div>
</div>

 <div class="container-fluid mt-5" style="background-color:
 #4B7289" id="Feedback">
 <h1 class="text-center testyheading p-4"> Students' Feedback</h1>
 <div class="row">
  <div class="col-md-12">
    <div id="testimonial-slider" class="owl-carousel">
      <div class="testimonial">
        <p class="description">
         I am enjoying my enrolled courses here.The tutors are so helpful and courses are fun in learning.

<div class="pic">
  <img src="image/student.jpg" alt=" "/>
</div>
<div class="testimonial-prof">
</div>
<h4>Riya</h4>
<small>Web Developer</small>
</div>
</div>
</div>
</div>
</div>

<!-- start contact us-->
<?php
include('./contact.php');
?>
<!-- end contact us-->

<div class="row text-white text-center p-1">
  <div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
</div>
<div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
</div>

<div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
</div>
<div class="col-sm">
    <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
</div>
</div>
</div>
<div class="container-fluid p-4" style="background-color:#e9ecef">
  <div class="container" style="background-color: #E9ECEF">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>E-MERGE EDUCATION provides universal access to world quality education,partnering with various universities and organizations to offer courses online.</p>
</div>
<div class="col-sm">
  <h5>Category</h5>
  <a class="text-dark" href="#">Web developer</a><br />
  <a class="text-dark" href="#">Web designing</a><br />
 <a class="text-dark" href="#">Android App Dev</a><br />
 <a class="text-dark" href="#">IOS developer</a><br />
</div>
<div class="col-sm">
  <h5>Contact Us</h5>
  <p>Emerge Pvt Ltd<br> Near Banani Rd 8<br> ph.0000 </p>
  </div>
  </div>
  </div>
  </div>
  <?php

include('./maininclude/footer.php');
?>
