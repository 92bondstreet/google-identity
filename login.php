<!DOCTYPE html>
<html>
<head>
  <title>Identity Toolkit for Websites</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <style>
    body {
      padding-top:80px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="jumbotron text-center">
      <h1><span class="fa fa-lock"></span> Identity Toolkit for Websites</h1>
      <p>Login only with</p>
      <button id="signin" class="btn btn-danger"><span class="fa fa-google"></span> Google</button>
      <div id="navbar" style="display:none"></div>
    </div>
  </div>
  <script type="text/javascript" src="login.js"></script>
  <script type="text/javascript" src="//www.gstatic.com/authtoolkit/js/gitkit.js"></script>
  <script type=text/javascript>
    window.google.identitytoolkit.signInButton(
      '#navbar', // accepts any CSS selector
      {
        'widgetUrl': '/callback',
        'signOutUrl': '/login'
      }
    );
  </script>
</body>
</html>
