<?php
  require_once('partials/head.php');
  require_once('partials/header.php');
  $title = "Home - Matthew Thoms, Web Designer / Developer";
 ?>
 <!-- SLIDER -->
 <section id="slider">
   <div id="home-carousel" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
       <div class="item active" style="background-image: url(images/slider/01.jpg)">
         <div class="carousel-caption container">
           <div class="row">
             <div class="col-sm-7">
               <h1>Web Design </h1>
               <h2>is my creative world.</h2>
               <a class="btn btn-hero" href="#more-info" role="button">View details...</a>
               </div>
           </div>
         </div>
       </div>
       <div class="item" style="background-image: url(images/slider/02.jpg)">
         <div class="carousel-caption container">
           <div class="row">
             <div class="col-sm-7">
               <h1>Web Development </h1>
               <h2>is my passion.</h2>
               <a class="btn btn-hero" href="#more-info" role="button">View details...</a>
             </div>
           </div>
         </div>
       </div>
       <div class="item" style="background-image: url(images/slider/03.jpg)">
         <div class="carousel-caption container">
           <div class="row">
             <div class="col-sm-7">
               <h1>The internet </h1>
               <h2>is a beautiful place.</h2>
               <a class="btn btn-hero" href="#more-info" role="button">View details...</a>
             </div>
           </div>
         </div>
       </div>
       <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
       <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
     </div>
   </div> <!--/#home-carousel-->
   </section>
 <!-- /SLIDER -->
<div class="title-index">
<div class="container text-center">
  <h1>Web Design / Developer</h1>
  <h2 class="located">Located in Southern Ontario, Canada</h2>
  <h3>Welcome to my home on the web. Here I provide everything you will ever need to know about me, what I do and what my passion is...</h3>
</div>
</div>
<br>
<br>
<div class="grey-section">


<div class="container text-center">
  <div class="row">
      <div id="more-info" class="col-sm-12 col-md-4 col-lg-4">
        <span class="fa-stack fa-4x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-user fa-stack-1x fa-inverse"></i>
        </span>
          <h2>About Me</h2>
          <p>I am currently an Interactive Web Design and development student at <a href="http://georgiancollege.ca/" title="Outbound link to Georgian College's Website.">Georgian College of Applied Arts and Technology</a> in Barrie, Ontario, Canada.</p>
          <a class="btn btn-send" href="about.php" role="button">View details...</a>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-sm-12 col-md-4 col-lg-4">
        <span class="fa-stack fa-4x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-code fa-stack-1x fa-inverse"></i>
        </span>
          <h2>Coding &amp; Design</h2>
          <p>I love to code for hours on end. I love to code and create from the ideas I have in my head. Designing and developing the web is my passion. Just sit me down at a computer and let me create.</p>
          <a class="btn btn-send" href="work.php" role="button">View details...</a>
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-sm-12 col-md-4 col-lg-4">
        <span class="fa-stack fa-4x">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-camera fa-stack-1x fa-inverse"></i>
        </span>
          <h2>My Photography</h2>
          <p>I use a Canon Rebal T3 DSLR camera to capture my photos that I want to show and share with people. I love photography as a hobby / past time. Remembering monments is a wonderful thing!</p>
          <a class="btn btn-readmore" href="https://500px.com/matthewthoms" role="button">View details...</a>
      </div>
      <!-- /.col-lg-4 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
</div>
<!-- /.info section -->
 <?php
 require_once('partials/footer.php');
  ?>
