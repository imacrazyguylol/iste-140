<?php
/*
  ISTE-140 Session Demo - reset-session.php
  -----------------------------------------
  Clears the current session so you can restart the demo.

  Nothing to change here for your form fields.
*/
session_start();
session_unset();
session_destroy();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Session Reset</title>
</head>
<body>
  <h1>Session cleared</h1>
  <p>All stored submissions are gone.</p>
  <p><a href="index.html">Back to form</a></p>
</body>
</html>
