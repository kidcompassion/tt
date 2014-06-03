<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Canadian Web Series Bill and Sons Towing Newsletter Subscription: Hamilton, Ontario, Canada</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<header>
  <a href="http://billandsonstowing.com" target="_blank"><span class="glyphicon glyphicon-arrow-left"></span> &nbsp;Go to our website</a>
</header>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
           <img class="logo-img" src="img/logo.jpg"/><h1>Towing Talk Newsletter</h1>

          <h3>Have you ever been stiffed by a customer?</h3>
          <h3>Have you ever been <span class="underline">bitten</span> by a customer?</h3>
          <h3>Are you tired of all the bullshit?</h3>
          <br>
          <p>Hello fellow towers. We here at Bill &amp; Sons Towing know customers can be a huge fuckin pain in the ass, so we're writing a newsletter about the tow business, so we can all talk shop (aka how we wish some customers would just fuck off).</p>
  
         
        </div>
        <div class="col-md-6">
             <div class="video-container">
                <iframe width="560" height="315" src="//www.youtube.com/embed/aFKy27gMGaQ?list=PL2891EE8661CF72FA" frameborder="0" allowfullscreen></iframe>
            </div>


       </div>
     </div>

     <div class="row second-pane">
          <div class="col-md-8 col-md-offset-2">
   <!-- Begin MailChimp Signup Form -->
  
            <div id="mc_embed_signup">
              <form action="http://billandsonstowing.us8.list-manage1.com/subscribe/post?u=8617c65621b7a22ce0449624f&amp;id=1b181b1671" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <h3><label for="mce-EMAIL">Subscribe to the Towing Talk Newsletter</label></h3>
             <p> <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required></p>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_8617c65621b7a22ce0449624f_1b181b1671" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn-danger"></div>
                </form>
            </div>

<!--End mc_embed_signup-->
         
          </div>
        </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 contribute"> 
          <h2> Contribute to Towing Talk!</h2>

           <p><strong>Tell us about your experiences on the job. If it's messed up enough, we might feature you in an upcoming issue.</strong></p>
                      
                      <?php
                        // display form if user has not clicked submit
                        if (!isset($_POST["submit"])) {
                          ?>
                          <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">

                          Your name (if you prefer to be anonymous, just leave it blank): <input type="text" name="from"><br>
                          Message: <textarea rows="10" cols="40" name="message"></textarea><br>
                          <input type="submit" name="submit" class="btn btn-primary" value="Submit Feedback">
                          </form>
                          <?php 
                        } else {    // the user has submitted the form
                          // Check if the "from" input field is filled out
                          if (isset($_POST["from"])) {
                            $from = $_POST["from"]; // sender
                            $subject = $_POST["subject"];
                            $message = $_POST["message"];
                            // message lines should not exceed 70 characters (PHP rule), so wrap it
                            $message = wordwrap($message, 70);
                            // send mail
                            mail("sallypoulsen@gmail.com",$subject,$message,"From: $from\n");
                            echo "Thank you for sending us feedback";
                          }
                        }
                        ?>


       
    </div>
    </div>

      <hr>

      <footer>
        <p>&copy; Bill and Sons Towing 2014  | Site by Dave  |  Content by Tony &amp; Jon | Idea by Eric</p>
      </footer>
    </div> <!-- /container -->        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51532388-1', 'billandsonstowing.com');
  ga('send', 'pageview');

</script>
      
    </body>
</html>
