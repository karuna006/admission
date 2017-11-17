 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" method="post" action="../controller/login_controller.php">
        <h2 class="form-signin-heading">sign in now</h2>
        
        <div class="login-wrap">
        
        
            <input type="text" name="user_name" class="form-control" placeholder="User ID" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
        </div>
      </form>

    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>


  </body>
</html>
