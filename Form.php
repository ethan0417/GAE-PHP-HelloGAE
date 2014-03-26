<html>
  <body>
    <?php
    if (array_key_exists('content', $_POST)) {
      echo "You wrote:<pre>\n";
      echo ($_POST['content']);
      echo "\n</pre>";
    }
    ?>
    <form action="/Form" method="post">
      <div><textarea name="content" rows="3" cols="60"></textarea></div>
      <div><input type="submit" value="Sign Guestbook"></div>
    </form>
  </body>
</html>