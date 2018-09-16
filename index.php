<!-- Pat Ausman -->
<!-- index.html Sept 2018 -->
<!-- pma.jpeg created by Pat Ausman -->
<?php require('randomquote.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pat Ausman </title>

    <!-- use bootstrap and responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- external css file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>
    <!-- Use bootstrap to help it look nice -->
    <div class="container">
    <div class="jumbotron">
      <h1> Pat Ausman </h1>

      <!-- Image of myself -->
      <img class="img-responsive" src = "images/pma.jpeg" alt="me" >

      <!-- Blub about myself -->
      <h3> About me </h3>
      <h5> Semi-retired taking classes that interest me after 30 years in the
            IT field both in software and hardware
      </h5>

      <!-- Random Quote Section -->
      <h3> Random Quote </h3>

      <blockquote class = "quoteclass" cite="http://wisdomquotes.com/life-quotes/">
        <h5>
          <?php echo $quotes[$qnumber]['quote'].'<br>&ensp;--'.$quotes[$qnumber]['author'].'<br>'; ?>
        </h5>
      </blockquote>

    </div>
    </div>
  </body>
</html>
