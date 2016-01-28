<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Matthew Thoms, Web Designer / Developer Based in Southen Ontario, Canada. Works with HTML, CSS, PHP, JavaScript, ASP.NET / C#.">
    <meta name="keywords" content="Matthew Thoms, HTML, CSS, PHP, C#, ASP.NET, JavaScript, Web, Design, Designing, Technology, Developer, Developing, Barrie, Southen Ontario, Canada">
    <title>Message Sent - Matthew Thoms, Web Designer / Developer</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-social.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/photography-nav.css">
    <link rel="stylesheet" href="css/main_styles.css">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!-- <div class="alert alert-success site-alert" role="alert"><strong>Welcome!</strong> Thanks for stopping by, New Design launch!</div> -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/photography-header.jpg">
        <div class="container navbar-container">
            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">Matthew Thoms</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html" title="Link to the home page.">Home</a></li>
                            <li><a href="about.html" title="Link to the about page.">About</a></li>
                            <li><a href="work.html" title="Link to the work page.">Work</a></li>
                            <li><a href="http://matthewthoms.com/blog" title="Outbound link to blog - Matthew Thoms Blog">Blog</a></li>
                            <li><a href="https://500px.com/matthewthoms" title="Outbound link to 500px Account - Matthew Thoms Account">Photography</a></li>
                            <li class="active"><a href="contact.html" title="Link to the contact page.">Contact</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
                <!--/.container-fluid -->
            </nav>
        </div>
        <!-- /container -->
    </div>
    <!-- End of Image -->
    <div class="container padding-top-5rem">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <h1>Contact</h1>
            </div>
        </div>
        <!-- End of row - title.-->
        <div class="row padding-bottom-2rem">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <?php

                    // Contact Form Varibles
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];

                    //Variable indicating if form is complete or not.
                    $complete = true;

                    if (empty($name)) {
                    	  echo 'A name is required so I know who to get back to.<br/>';
                    	  $complete = false;
                    	}

                    if (empty($email)) {
                    	  echo 'Email is required to contact you back.<br/>';
                    	  $complete = false;
                    	}

                    if (empty($message)) {
                    	  echo 'Message is required for contacting me.<br/>';
                    	  $complete = false;
                    	}

                    // if the form is filled out correctly and send the email with the form content.
                    if ($complete == true) {
                      // Emailing Varibles.
                      $email_to = "matthew@matthewthoms.com";
                      $subject_line = "Contact Form | Matthew Thoms Site | Name: $name";
                      $email_message = "You have received a message from contact form on matthewthoms.com \n\n ".
                    		"Here are the details:\n\n ".
                    		"Name: $name \n\n ".
                    		"Email: $email \n\n ".
                    		"Subject: $subject  \n\n ".
                    		"Message: \n\n $message";

                      $headers = "From: contact_form@matthewthoms.com";

                      mail($email_to,$subject_line,$email_message,$headers);
                      echo "<p>I have receive your message, I will get back to you as quick as we can.<br />
                    	Thank-you $name.</p>
                    	<a href=\"http://matthewthoms.com\" alt=\"Link to the main page at matthewthoms.com\" class=\"btn btn-primary\">Back to Home</a>
                      </body>";
                    }
                ?>
            </div>
            <!-- End of col -->
        </div>
        <!-- End of Row -->
        
        <!-- ==================================================================
					Footer
     		 ================================================================== -->
        <footer>
            <section id="social-media-icons" class="padding-bottom-2rem">
                <a href="https://www.facebook.com/matt.b.thoms" title="Outbound link to Facebook - Matthew Thoms Account." class="btn btn-social-icon btn-facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="http://twitter.com/matt_thoms" title="Outbound link to Twitter - Matthew Thoms Account." class="btn btn-social-icon btn-twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="http://github.com/mbthoms" title="Outbound link to GitHub - Matthew Thoms Account." class="btn btn-social-icon btn-github">
                    <i class="fa fa-github"></i>
                </a>
                <a href="http://ca.linkedin.com/pub/matthew-thoms/78/625/9a6" title="Outbound link to LinkedIn - Matthew Thoms Account." class="btn btn-social-icon btn-linkedin">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://instagram.com/mattbthoms/" title="Outbound link to Instagram - Matthew Thoms Account." class="btn btn-social-icon btn-instagram">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://www.pinterest.com/matt_thoms/" title="Outbound link to Pinterest - Matthew Thoms Account." class="btn btn-social-icon btn-pinterest">
                    <i class="fa fa-pinterest"></i>
                </a>
                <a href="http://google.com/+MatthewThoms" title="Outbound link to Google Plus - Matthew Thoms Account." class="btn btn-social-icon btn-google">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="https://foursquare.com/matt_thoms" title="Outbound link to foursquare - Matthew Thoms Account." class="btn btn-social-icon btn-foursquare">
                    <i class="fa fa-foursquare"></i>
                </a>
            </section>
            <p>Copyright &copy; <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> Matthew Thoms</p>
			<script type="text/javascript">                                                                                  (function () { var c = document.createElement('link'); c.type = 'text/css'; c.rel = 'stylesheet'; c.href = 'http://images.dmca.com/badges/dmca.css?ID=31917144-2190-4ea9-be67-4ce1ba953f2f'; var h = document.getElementsByTagName("head")[0]; h.appendChild(c); })();</script><div id="DMCA-badge"><div class="dm-1 dm-1-b" style="left: 0px; background-color: rgb(0, 162, 255);"><a href="http://www.dmca.com/" title="DMCA">DMCA</a></div><div class="dm-2 dm-2-b" style="background-color: rgb(0, 0, 0);"><a href="http://www.dmca.com/Protection/Status.aspx?ID=31917144-2190-4ea9-be67-4ce1ba953f2f" title="DMCA">PROTECTED</a></div></div>        </footer>
    </div>
    <!-- End of container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Bringing in the Parallax for the images. -->
    <script src="js/parallax.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-64268000-1', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
