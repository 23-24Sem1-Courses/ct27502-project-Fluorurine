
  <?php
  require 'vendor/autoload.php';

  $request = $_SERVER['REQUEST_URI'];
  $path = parse_url($request, PHP_URL_PATH);
  $filename = basename($path, ".php");
  echo $filename . "\r\n";
  // echo __DIR__;
  switch ($filename) {
    case '':
      require  ".\\view\\home.php";
      break;
    case 'login':
      require  '.\\view\\login.php';
      break;
      // case '/contact':
      //   include 'contact.php';
      //   break;
    default:
      require ".\\view\\404.php";
      break;
  }
  echo "PHP is running" ?>
