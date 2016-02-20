<?php require_once('partials/head.php');
require_once('partials/header.php');
$title = "Work - Matthew Thoms, Web Designer / Developer";?>





<!-- OUR WORKS -->
<section id="our-works">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h1>Work Showcase</h1>
        </div>
      </div>

      <div class="portfolio-wrapper" >
        <div class="col-md-12">
          <ul class="filter">
            <li><a class="active" href="#" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".html-css">HTML/CSS</a></li>
            <li><a href="#" data-filter=".asp-net">ASP.NET/C#</a></li>
            <li><a href="#" data-filter=".php">PHP</a></li>
            <li><a href="#" data-filter=".bootstrap">Bootstrap</a></li>
          </ul><!--/#portfolio-filter-->
        </div>

        <div class="portfolio-items">

          <div class="col-md-4 col-sm-6 work-grid html-css php bootstrap">
            <div class="portfolio-content">
              <img class="img-responsive" src="images/works/indy-graphics-preview.jpg" alt="">
              <div class="portfolio-overlay">
                <a href="images/works/indy-graphics.jpg"><i class="fa fa-camera"></i></a>
                <h5>Indy Graphics</h5>
                <p>Indy Graphics has been providing print products to customers in their local area and to customers all around the globe.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 work-grid html-css asp-net bootstrap">
            <div class="portfolio-content">
              <img class="img-responsive" src="images/works/food-exercise-tracker-preview.jpg" alt="">
              <div class="portfolio-overlay">
                <a href="images/works/food-exercise-tracker.jpg"><i class="fa fa-camera"></i></a>
                <h5>Food / Exercise Tracker</h5>
                <p>Food and exercise tracker that you can signup, login, track and only see the person's data from that login.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 work-grid html-css">
            <div class="portfolio-content">
              <img class="img-responsive" src="images/works/to-do-list-preview.jpg" alt="">
              <div class="portfolio-overlay">
                <a href="images/works/to-do-list.jpg"><i class="fa fa-camera"></i></a>
                <h5>To Do List</h5>
                <p>To Do List made from HTML, CSS and jQuery.</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- /OUR WORKS -->





 <?php require_once('partials/footer.php'); ?>
