<?php require_once('partials/head.php');
require_once('partials/header.php');
$title = "Contact - Matthew Thoms, Web Designer / Developer"; ?>

<!-- CONTACT -->
<section id="contact">
  <div class="container first-container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
          <h1>
            <span class="fa-stack">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-comments fa-stack-1x fa-inverse"></i>
            </span>
            Contact
          </h1>
        </div>
      </div>
      <div class="col-sm-4 contact-info">
        <p class="st-address"><i class="fa fa-map-marker fa-x2"></i> <strong>Barrie, Canada</strong></p>
        <p class="st-email"><i class="fa fa-envelope-o"></i> <strong><a href="mailto:matthewthomsmedia@gmail.com" title="Email matthewthomsmedia@gmail.com">matthewthomsmedia@gmail.com</a></strong></p>
        <p class="st-website"><i class="fa fa-globe"></i> <strong><a href="http://matthewthoms.com/" title="Link to http://matthewthoms.com/">www.matthewthoms.com</a></strong></p>

      </div>
      <div class="col-sm-7 col-sm-offset-1">
        <form action="send-contact.php" class="contact-form" name="contact-form" method="post">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" name="name" required="required" placeholder="Name*">
            </div>
            <div class="col-sm-6">
              <input type="email" name="email" required="required" placeholder="Email*">
            </div>
            <div class="col-sm-12">
              <input type="text" name="subject" placeholder="Subject">
            </div>
            <div class="col-sm-12">
              <textarea name="message" required="required" cols="30" rows="7" placeholder="Message*"></textarea>
            </div>
            <div class="col-sm-12">
              <input type="submit" name="submit" value="Send Message" class="btn btn-send">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /CONTACT -->






 <?php require_once('partials/footer.php'); ?>
