<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BIN LOGIN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">   
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap-overrides.css" rel="stylesheet">
	<link href="css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
    <link href="css/bin.css" rel="stylesheet">
	<link href="css/components/signin.css" rel="stylesheet" type="text/css">   
    <!-- Javascript -->
    <script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/jquery-ui-1.8.18.custom.min.js"></script>    
	<script src="js/jquery.ui.touch-punch.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/demos/signin.js"></script>
</head>
<body>
<div id="login-container">
    <a href="#" class="logo-login"><img src="img/logo.png"></a>
    <div class="account-container login">
        <div class="content clearfix">
            <form action="./" method="post">
                <h1>LOGIN</h1>		
                <div class="login-fields">
                    <p>Silahkan login terlebih dahulu:</p>
                    <div class="field">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" value="" placeholder="Username" class="login username-field" />
                    </div> <!-- /field -->
                    <div class="field">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
                    </div> <!-- /password -->
                </div> <!-- /login-fields -->
                <div class="login-actions">
                    <span class="login-checkbox">
                        <input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
                    </span>
                    <button class="button btn btn-secondary btn-large">Sign In</button>
                </div> <!-- .actions -->
            </form>
        </div> <!-- /content -->
    </div> <!-- /account-container -->
</div> <!-- /login-container -->
</body>
</html>
