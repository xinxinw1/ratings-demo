<?php header("Cache-Control: no-cache"); ?>
<?php session_start(); ?>
<?php $version = "2.1"; ?>
<?php
if (isset($_POST['username'])){
  $_SESSION['username'] = $_POST['username'];
}

if (isset($_POST['logout'])){
  session_destroy();
  session_start();
}

$username = "";
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
}

$id = "0";
if (isset($_GET['id'])){
  $id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Ratings Demo <?php echo $version ?></title>
  <meta charset="UTF-8">
  <style type="text/css">
  * {margin: 0; padding: 0; border: 0 none;}
  body {color: #000; text-align: center; font: 13px Tahoma, sans-serif;}
  .clear {clear: both;}
  
  div, h1, iframe {margin: 10px auto;}
  
  h1 {font-size: 24px;}
  
  input[type="text"] {border: 1px solid #AAA; background-color: #FFF; font: 13px Tahoma, sans-serif; padding: 1px;}
  input[type="submit"] {border: 1px solid #000; background-color: #C0C0C0; font: 13px Tahoma, sans-serif; padding: 0 5px; color: #000;}
  
  #login-logout, #id {width: 150px;}
  #login-logout form {display: inline;}
  #login-logout input[type="text"] {width: 85px;}
  #id input[type="text"] {width: 146px;}
  
  a {color: #005EC8;}
  </style>
</head>

<body>
  <h1 id="title">Ratings Demo <?php echo $version ?></h1>
  <div id="login-logout">
    <form action="?id=<?php echo rawurlencode($id) ?>" method="post">
      <input type="text" name="username" value="<?php echo $username ?>" placeholder="Username">
    </form>
    <form action="?id=<?php echo rawurlencode($id) ?>" method="post">
      <input type="submit" name="logout" value="Logout">
    </form>
  </div>
  <div id="id">
    <form method="get">
      <input type="text" name="id" value="<?php echo $id ?>" placeholder="Item Id">
    </form>
  </div>
  <iframe width="170" height="65" style="border: 0; display: block;" src="lib/ratings/?id=<?php echo rawurlencode($id) ?>"></iframe>
  <div id="text">
    Github: <a href="https://github.com/xinxinw1/ratings-demo">https://github.com/xinxinw1/ratings-demo</a>
  </div>
</body>

</html>
