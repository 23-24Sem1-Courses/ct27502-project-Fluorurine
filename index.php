<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Load Jquerry and Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
  <title>Web bán quần áo</title>
</head>

<body>


  <?php
  require 'vendor/autoload.php';


  $request = $_SERVER['REQUEST_URI'];
  $path = parse_url($request, PHP_URL_PATH);
  $filename = basename($path, ".php");
  // echo $filename . "\r\n";
  // Render phần header tuỳ vào điều kiện đăng nhập
  if (1 == 1) {
    require '.\\view\\header.php';
  }
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
  if (1 == 1) {
    require '.\\view\\footer.php';
  }
  ?></body>

</html>