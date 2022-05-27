<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <?php include("./includes/scripts.php"); ?>
</head>
<body style="background-color:grey;">
    <?php include("./includes/navbar.php"); ?>


  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/hush-naidoo-jade-photography-yo01Z-9HQAw-unsplash.jpg" background-repeat="no-repat" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/enric-moreu-rIymmvOq3P8-unsplash.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/robina-weermeijer-NIuGLCC7q54-unsplash.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include("./includes/footer.php") ?>
</body>
</html>