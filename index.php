<?php
  $redirect_to = "https://www.newlocation.com/";
  header('Location: ' . $redirect_to, true, 302);
  exit; // Always call exit after header redirects
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Redirecting...</title>
  <meta http-equiv="refresh" content="0; url=<?= htmlspecialchars($redirect_to) ?>">
  <link rel="canonical" href="<?= htmlspecialchars($redirect_to) ?>" />
</head>
<body>
  <p>If you are not redirected automatically, follow this <a href="<?= htmlspecialchars($redirect_to) ?>">link</a>.</p>
</body>
</html>
