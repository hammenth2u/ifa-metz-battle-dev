<div id="h">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h1>SOON</h1>
          <h5>WE ARE CRAFTING THE LAST DETAILS TO LAUNCH OUR SITE</h5>
          <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
          <div class="countdown-header">
            <div class="countdown" data-date="2021/07/31"></div>
          </div>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/H-->

  <div class="container ptb">
    <div class="row">
      <div class="col-md-6">
        <h2>We are working hard to launch our awesome new site.</h2>
        <BR/>
        <h4>LOREM IPSUM IS SIMPLY DUMMY TEXT.</h4>

        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
          here, content here', making it look like readable English.</p>
        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
        <p><button class="btn btn-conf btn-blue">Learn More</button></p>
      </div>
      <!--/col-md-6-->
      <div class="col-md-6">
        <img src="<?=$_SERVER['BASE_URI']?>/assets/img/browser.png" class="aligncenter" width="350">
      </div>
      <!--/col-md-6 -->
    </div>
    <!--/row-->
  </div>
  <!--/container-->

  <div id="g">
    <div class="container">
      <div class="row centered">
        <h1>Subscribe to stay informed</h1>
        <div class="col-md-6 col-md-offset-3">
          <form role="form" action="register.php" method="post" enctype="plain">
            <input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address..." required>
            <button class='btn btn-conf btn-blue' type="submit">Subscribe</button>
          </form>
        </div>
      </div>
      <!--/row-->

      <div class="row mt">
        <div class="col-md-3">
          <h4>SOCIAL MEDIA</h4>
          <p>
            <a href="#"><i class="ion-social-twitter"></i></a>
            <a href="#"><i class="ion-social-instagram"></i></a>
            <a href="#"><i class="ion-social-facebook"></i></a>
            <a href="#"><i class="ion-social-dribbble"></i></a>
          </p>
        </div>
        <div class="col-md-5">
          <h4>ABOUT COON</h4>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
        </div>
        <div class="col-md-4">
          <h4>CONTACT INFORMATION</h4>
          <p>
            hello@example.com<br/> Park Ave, 987,<br/> London, United Kingdom.
          </p>
        </div>
      </div>
      <!--/row-->
    </div>
    <!--/container-->
  </div>
  <!--/div-->


  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="centered">Contact Form</h2>
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- / contact -->