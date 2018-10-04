<?php
  include('components/header.php');
  include('components/navs/auth.php');
?>


<div class="app">
  <section id="login-page">
    <div class="container">
      <div class="center">
        <h2>Sign In for Tickethub</h2>
        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="row contact-wrap">
        <div class="status alert alert-success" style="display: none"></div>
        <div class="col-md-4 col-md-offset-4">
          <div id="errormessage"></div>
          <form id="regForm" action="data/auth.php" method="post" role="form" class="contactForm">
            
            <div class="form-group">
              <input type="email" class="form-control validate" name="email" id="email" placeholder="Your Email">
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control validate" name="password" id="password" placeholder="Your Password">
              <div class="validation"></div>
            </div>
            
            <div class="text-center"><button type="submit" name="submit" value="" class="btn btn-primary btn-lg" required="required">Sign In</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
</div>


<!-- //validation message -->
<div class="alert alert-box" style="display:none">
    <p class="alert-data"></p>
</div>

<?php
  include('components/footer.php');
?>