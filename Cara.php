<!DOCTYPE html>
<html lang="en">
<head>
 <title>My Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Welcome to My Website</h1>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand" href="index.php">Home</a>
    </li>
  </ul>
</nav>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="variasi1.jpg" alt="Oreo" class="d-block" style="width:100%">
    </div>
	<div class="carousel-item active">
      <img src="variasi2.jpg" alt="Oreo" class="d-block" style="width:100%">
  </div>
  <div class="carousel-item active">
      <img src="variasi3.jpg" alt="Oreo" class="d-block" style="width:100%">
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
<ul class="pagination">
  <li class="page-item"><a class="page-link" href="index.php">Previous</a></li>
  <li class="page-item"><a class="page-link" href="page1.php?page=page1.php">1</a></li>
  <li class="page-item"><a class="page-link" href="page2.php?page=page2.php">2</a></li>
  <li class="page-item"><a class="page-link" href="page3.php?page=page3.php">3</a></li>
  <li class="page-item"><a class="page-link" href="page1.php?page=page1.php">Next</a></li>
</ul>
  <p>2023</p>
</div>
</body>
</html>
