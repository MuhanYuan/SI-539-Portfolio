<?php
  session_start();
  if (isset($_SESSION["message"])){
    echo $_SESSION["message"];
    unset($_SESSION["message"]);
  }
  else{
    echo "Why you are here? I am sorry I have nothing for you.";
  }
?>
<html>
  <body>
    <a href="index.php">Back to MY home page</a>
  </body>
</html>
