<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link type="text/css" rel="stylesheet" href="//www.gstatic.com/authtoolkit/css/gitkit.css" />
  </head>
  <body>
    <div id="gitkitWidgetDiv"></div>
    <!-- Copy and paste here the client configuration from Developer Console into the config variable -->
    <script type="text/javascript" src="//www.gstatic.com/authtoolkit/js/gitkit.js"></script>
    <script type="text/javascript">
      var config = {
        // Copy and paste client configuration here
      };
      // The HTTP POST body should be escaped by the server to prevent XSS
      window.google.identitytoolkit.start(
        '#gitkitWidgetDiv', // accepts any CSS selector
        config,
        JSON.parse('<?php echo json_encode(file_get_contents("php://input")); ?>')
      );
    </script>
    <!-- End modification -->
  </body>
</html>
