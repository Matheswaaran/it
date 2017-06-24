<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>    
    <link rel="stylesheet" href="css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">    
  </head>

  <body>    
<!-- Mixins-->
    <div class="pen-title">
      <h1>Online Portal for Projector</h1><span><i class='fa fa-code'></i> by <a href='https://gscpsnacet.github.io/'>Google Students Club</a></span>
    </div>
    <!-- <div class="rerun"><a href="">Rerun Pen</a></div><br><br><br><br> -->
    <div class="container">
        <div class="card"></div>
        <div class="card">
          <h1 class="title">Login</h1>
          <form method="post" action="security/validate_login.php">
            <div class="input-container">
              <input type="text" name="Username" id="Username" required="required"/>
              <label for="Username">Username</label>
                <div class="bar"></div>
            </div>
            <div class="input-container">
              <input type="password" name="Password" id="Password" required="required"/>
              <label for="Password">Password</label>
              <div class="bar"></div>
            </div>
            <div class="button-container">
              <button type="submit"><span>Login</span></button>
            </div>
            <div class="footer"><a href="#">Forgot your password?</a></div>
          </form>
        </div>
      <div class="card alt">
        <div class="toggle"></div>
        <h1 class="title">Admin Login
          <div class="close"></div>
        </h1>
        <form method="post" action="security/validate_AdLogin.php">
          <div class="input-container">
            <input type="text" name="Username" id="Username" required="required"/>
            <label for="Username">Username</label>
          <div class="bar"></div>
        </div>
        <div class="input-container">
          <input type="password" name="Password" id="Password" required="required"/>
          <label for="Password">Password</label>
          <div class="bar"></div>
        </div>
        <div class="button-container">
          <button type="submit"><span>Login</span></button>
        </div>
      </form>
    </div>
  </div>
  <!-- Portfolio<a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
  <!-- CodePen<a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>-->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>  
  </body>
</html>
