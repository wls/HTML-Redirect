<?php
  $redirect_to = "https://www.newlocation.com/"; /* Put your URL here */
  header('Location: ' . $redirect_to);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <meta http-equiv="refresh" content="0; URL='<?= $redirect_to ?>'" />
        <link rel="canonical" href="<?= $redirect_to ?>"/>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<h1>Redirect</h1>
        <p>The location you're attempting to reach has moved, please click on the new location:</p>
        <p><a href="<?= $redirect_to ?>"><?= $redirect_to ?></a></p>

        <script>
          window.location.href = "<?= $redirect_to ?>";
        </script>
    </body>
</html>
