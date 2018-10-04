<?php
  require('data/sessions.php');
  include('components/header.php');
  include('components/navs/auth2.php');
?>


<div class="app">
  <section id="login-page">
    <div class="container">
      <div class="center">
        <h2>Get Tickets for your favourite shows!!</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-4 col-md-offset-4">
          <div id="errormessage"></div>
          <form id="regForm" action="data/signup.php" method="post" role="form" class="contactForm">
            
            <div class="form-group">
              <input type="text" class="form-control validate" name="fname" id="fname" placeholder="First Name" data-type="name">
              <div class="validation"></div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control validate" name="lname" id="lname" placeholder="Last Name" data-type="name">
              <div class="validation"></div>
            </div>

            <div class="form-group">
              <input type="tel" class="form-control validate" name="phone" id="phone" placeholder="Phone">
              <div class="validation"></div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control validate" name="place" id="place" placeholder="Place" data-type="name">
              <div class="validation"></div>
            </div>

            <div class="form-group">
              <input type="email" class="form-control verify" name="email" id="email" placeholder="Your Email">
              <div class="validation"></div>
            </div>
            
            <div class="form-group">
              <input type="password" class="form-control validate" name="password" id="password" placeholder="Your Password">
              <div class="validation"></div>
            </div>
            
            <div class="form-group">
              <input type="password" class="form-control validate" name="confirm-password" id="cpassword" placeholder="Confirm Password">
              <div class="validation"></div>
            </div>

            <!-- //validation message -->
            <?php
              if(getSession('l_err')){
                echo '<div class="alert alert-box">
                <p class="alert-data">';
                echo getSession('err_msg');
                echo '</p>
            </div> ';
            delSession('l_err');
            delSession('err_msg');
              }else{
                echo '
                <div class="alert alert-box" style="display:none">
                    <p class="alert-data"></p>
                </div> ';
              }
            ?>

            <div class="text-center"><button type="submit" name="submit" value="signup" class="btn btn-primary btn-lg" required="required">Sign Up</button></div>
          </form>
          <div class="float-right text-center">
            <a href="c_signup.php" class="btn">DO YOU HAVE TICKETS TO SELL?</a>
            </div>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
</div>


<?php
  include('components/footer.php');
?>