<?php
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Resto Finder</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
    <body>
      <div class="container">
        <div class="row">
          <h1>Resto Finder</h1>
        </div>
        <div class="row">
          <form action="action.php" method="post">
            <p>Please enter your choices :</p>
            <textarea class="form-control" rows="3" name="choices"></textarea>
            <p><input type="submit" value="Envoyer"></p>
          </form>
        </div>
      </div>
    </body>
</html>
