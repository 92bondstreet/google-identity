<?php
  set_include_path(get_include_path() . PATH_SEPARATOR . __DIR__ .'/identity/vendor/google/apiclient/src');
  require_once __DIR__ . '/identity/vendor/autoload.php';

  $gitkitClient = Gitkit_Client::createFromFile(dirname(__FILE__) . '/identity/callback-server-config.json');
  $gitkitUser = $gitkitClient->getUserInRequest();
  if ($gitkitUser) {
    // Example how to check the connected user mail
    // based on your domain name
    /*
    $allowed = array('mydomain.fr', 'mydomain.com');
    $email = $gitkitUser->getEmail();
    $domain = array_pop(explode('@', $email));
    if ( ! in_array($domain, $allowed)) {
      header("Location: http://localhost:8080/login");
      exit;
    }
    */
  }
  else {
    header("Location: http://localhost:8080/login");
    exit;
  }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <h1>Logged. Welcome.</h1>
  </body>
</html>
