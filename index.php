<?php require('randomquote.php'); ?>

<!DOCTYPE html>
<!-- Pat Ausman -->
<!-- index.html Sept 2018 -->
<!-- pma.jpeg created by Pat Ausman -->
<html>
  <head>
    <title>Pat Ausman </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="container">
    <div class="jumbotron">
        <h1> Pat Ausman </h1>

        <img class="img-responsive" src = "images/pma.jpeg" alt="me" >

        <h3> About me </h3>
        <h5> Semi-retired taking classes that interest me after 30 years in the
            IT field both in software and hardware
        </h5>

        <h3> Random Quote </h3>
        <h5>
        <blockquote class = "quoteclass" cite="http://wisdomquotes.com/life-quotes/">
            <?php echo $quotes[$qnumber]['quote'].'<br>&ensp;--'.$quotes[$qnumber]['author'].'<br>'; ?>

        </blockquote>
      </h5>
    </div>
  </div>
  </body>
</html>
