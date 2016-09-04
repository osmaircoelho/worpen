<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style type="text/css">
      body { text-align: center; background: #eee; }
      section, header { padding: 2%; }
      img { width: 16%; }
      input { width: 32%; min-width: 300px; border-radius: 5px; }
      input, button { padding: 10px 14px; margin: 1% 0;  border: 1px solid #888;}
      button { background: #ddd; cursor: pointer; }
      p { color: #c03; }
    </style>
  </head>
  <body>

    <header>
      <img src="front/logo_login.png">
    </header>

    <section>
      <form method="post" action="back/login.php">
        <div><input type="text" name="user" placeholder="User" autofocus required></div>
        <div><input type="password" name="pass" placeholder="Password" required></div>
        <?php
          $message = htmlspecialchars($_GET['m']);
          switch ($message) {
            case 'error':
              echo "<p>Oops, check the user and password</p>";
              break;
            
            case 'fill':
              echo "<p>Please complete all fields</p>";
              break;
            
            default:
              # code...
              break;
          }
        ?>
        <div><button type="submit">Login</button><div>
      </form>
    </section>

  </body>
</html>