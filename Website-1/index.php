<?php include 'server-info.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1>Server & File Info</h1>
      <?php if ($server): ?>
        <ul class="list-group">
          <?php foreach($server as $key => $value) : ?>
            <li class="list-group-item">
              <strong><?php echo $key; ?>: </strong>
              <?php echo $value; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <br>
      <h1>Client Info</h1>
      <?php if ($client): ?>
        <ul class="list-group">
          <?php foreach($client as $key => $value) : ?>
            <li class="list-group-item">
              <strong><?php echo $key; ?>: </strong>
              <?php echo $value; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <footer>
    <p>Mywebsite &copy; 2017</p>
  </footer>
</html>