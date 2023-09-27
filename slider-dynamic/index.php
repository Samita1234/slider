<?php

$curPage = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
$baseURL="http://localhost/slider-dynamic";

  require("conn.php");

  $query = "SELECT * FROM slider_tbl";
$result = mysqli_query($conn, $query);
$carouselItems = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div id="myslider" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
        <?php foreach ($carouselItems as $key => $item): ?>
            <li data-target="#myslider" data-slide-to="<?php echo $key; ?>" <?php echo ($key === 0) ? 'class="active"' : ''; ?>></li>
        <?php endforeach; ?>
  </ol>
  <div class="carousel-inner">
       <?php foreach ($carouselItems as $key => $item): ?>
            <div class="carousel-item <?php echo ($key === 0) ? 'active' : ''; ?>">
                <img class="d-block w-100" src="<?php echo $item['path']; ?>" alt="<?php echo $item['title']; ?>">
            </div>
        <?php endforeach; ?>
    
  </div>
  <button class="carousel-control-prev" type="button" data-target="#myslider" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#myslider" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

</div>
    

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>