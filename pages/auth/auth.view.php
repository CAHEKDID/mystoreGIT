<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; ?>
<!--//login, pass-->
<?php //session_start();?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="/css/auth.css">
<title>Admin Panel</title>
</head>
<body>
      <form action="checked.php" method="post">
        <h3>Admin-panel login</h3>
        <input type="text" class="login" placeholder="Login" name="login">
        <input type="password" class="pass" placeholder="Password" name="pass">
        <button type="submit" name="submit">Login</button>
          <?php
//          var_dump($_SESSION['msg']);
          if($_SESSION['msg']) {
              echo '<p class="error" ">' . $_SESSION['msg'] . "</p>";
          }
          unset($_SESSION['msg']);
          ?>
       </form>
      <a href="/" style="text-decoration: none;color: black;">back</a>
</body>
</html>





<?php //include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>