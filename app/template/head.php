<?php setcookie('last_error', '', -1, '/registration.php'); ?>
<?php setcookie('last_error', '', -1, '/authorization.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $pageName ?></title>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/template/styleSrc.php';?>
</head>
<body>
  <div id="background"></div>
  <?php include $_SERVER['DOCUMENT_ROOT'] .'/template/header.php';?>
  <div class="content">
