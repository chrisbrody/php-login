<?php
  include_once 'includes/db_connect.php';
  include_once 'includes/functions.php';
   
  sec_session_start();
   
  if (login_check($mysqli) == true) {
      $logged = 'in';
  } else {
      $logged = 'out';
  }
?>
<!doctype html>
<html>
  <head>
    <link href="https://s3.amazonaws.com/codecademy-content/projects/bootstrap.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Oxygen:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="css/main.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
  </head>
  <body ng-app="FeedsterApp">
    <?php
      if (isset($_GET['error'])) {
        echo '<p class="error">Error Logging In!</p>';
      }
    ?> 
    
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h1>feedster</h1>
          </div>
        </div>
      </div>
    </div>

    <form action="includes/process_login.php" method="post" name="login_form">                      
            Email: <input type="text" name="email" />
            Password: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
 
<?php
        if (login_check($mysqli) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
 
            echo '<p>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
        } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                        echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                }
?>      

    <div class="posts" ng-controller="PostCtrl">
      <div class="container">

        <div class="post">
          <feedster-post info="info" ng-repeat="info in posts"></feedster-post>
          <plus-one></plus-one>
        </div>

      </div>
    </div>
    
 
    <script src="js/sha512.js"></script> 
    <script src="js/form.js"></script> 
    <!-- Modules -->
    <script src="js/app.js"></script>

    <!-- Controllers -->
    <script src="js/controllers/PostCtrl.js"></script>
    <script src="js/directives/feedsterPost.js"></script>
    <script src="js/directives/plusOne.js"></script>
  </body>
<html>