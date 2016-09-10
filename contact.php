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
        <p class="st-address"><i class="fa fa-map-marker fa-x2"></i> <strong>Acton ON, Canada</strong></p>
        <p class="st-email"><i class="fa fa-envelope-o"></i> <strong><a href="mailto:matthew@matthewthoms.com" title="Email matthew@matthewthoms.com">matthew@matthewthoms.com</a></strong></p>
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

<iframe id="contact-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11550.97302139199!2d-80.0433731!3d43.6327024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b74ed72ea5b13%3A0x5c9e652ed5296bf!2sActon%2C+ON!5e0!3m2!1sen!2sca!4v1464848073170" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>





 <?php require_once('partials/footer.php'); ?>
