
<!doctype html>
<?php
include ('connect.php');

?>

<!doctype html>
<html lang="en">


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
  
</head>

<body>
  <!--NAVBAR-->
  <nav class="navbar bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/ace-clothing-logo-design.jpg" width="50" height="40" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Catagories.php">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Registration.html">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Header-->
  <header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1>Ace clothing</h1>
        <p>Style is a way to say who you are without having to speak.</p>
      </div>
    </div>
  </header>

  <!--Carasoul-->
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/2489629.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/young-handsome-man-choosing-clothes-shop.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/woman-black-trousers-purple-blouse-laughs-leaning-stand-with-elegant-clothes-pink-background.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <hr class="featurette-divider">



    <!-- Header Example 2 -->
    <div class="row">
      <div class="col-lg-7">
        <h3>Men's Clothing</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error odio quisquam a odit quaerat. Eaque hic
          numquam possimus animi dolor architecto provident eligendi neque? Ullam optio eum quam eos in? Quidem maiores
          qui eveniet placeat explicabo eius iste rem mollitia aliquid reprehenderit distinctio consequuntur porro
          libero corrupti eligendi similique quod est voluptatem, possimus voluptas earum? Sequi incidunt tempora
          delectus ipsam assumenda maiores quisquam. Autem unde, perferendis inventore placeat ex odit eligendi
          explicabo porro nisi rem ducimus obcaecati dicta minus laborum aliquam facilis quibusdam quas sit
          reprehenderit necessitatibus qui repudiandae iusto consequuntur. Minima atque perspiciatis minus enim
          deleniti, cumque accusamus illo?</p>
      </div>
      <div class="col-lg-5">
        <img src="img/Not-Normal-High-Fashion-Gets-Serious-About-Regular-Clothes-20-Edit.jpg" alt="image" srcset="" class="img img-fluid img-thumbnail">
      </div>
    </div>
    <hr class="featurette-divider">
    <!-- Header Example 3-->
    <div class="row">
      <div class="col-lg-5">
        <img src="img/best-online-stores-for-clothes.jpeg" alt="image" srcset="" class="img img-fluid img-thumbnail">
      </div>
      <div class="col-lg-7">
        <h3>Women's Clothing</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error odio quisquam a odit quaerat. Eaque hic
          numquam possimus animi dolor architecto provident eligendi neque? Ullam optio eum quam eos in? Quidem maiores
          qui eveniet placeat explicabo eius iste rem mollitia aliquid reprehenderit distinctio consequuntur porro
          libero corrupti eligendi similique quod est voluptatem, possimus voluptas earum? Sequi incidunt tempora
          delectus ipsam assumenda maiores quisquam. Autem unde, perferendis inventore placeat ex odit eligendi
          explicabo porro nisi rem ducimus obcaecati dicta minus laborum aliquam facilis quibusdam quas sit
          reprehenderit necessitatibus qui repudiandae iusto consequuntur. Minima atque perspiciatis minus enim
          deleniti, cumque accusamus illo?</p>
      </div>

    </div>
    <hr class="featurette-divider">

    <!--Header Example 4-->

    <div class="row">
      <div class="col-lg-5">
        <img src="img/teens-clothes-shopping-singapore-uniqlo-900x643.jpg" alt="image" srcset="" class="img img-fluid img-thumbnail">
      </div>
      <div class="col-lg-12">
        <h3>Kid's Clothing</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error odio quisquam a odit quaerat. Eaque hic
          numquam possimus animi dolor architecto provident eligendi neque? Ullam optio eum quam eos in? Quidem maiores
          qui eveniet placeat explicabo eius iste rem mollitia aliquid reprehenderit distinctio consequuntur porro
          libero corrupti eligendi similique quod est voluptatem, possimus voluptas earum? Sequi incidunt tempora
          delectus ipsam assumenda maiores quisquam. Autem unde, perferendis inventore placeat ex odit eligendi
          explicabo porro nisi rem ducimus obcaecati dicta minus laborum aliquam facilis quibusdam quas sit
          reprehenderit necessitatibus qui repudiandae iusto consequuntur. Minima atque perspiciatis minus enim
          deleniti, cumque accusamus illo?</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <h3>Other Brands</h3>
        <img src="img/3-poloski-adidas-logo.png" alt="image" srcset="" class="img img-fluid img-thumbnail">
      </div>
      <div class="col-lg-3">
        <img src="img/versace-primary-logo.png" alt="image" srcset="" class="img img-fluid img-thumbnail">
      </div>
      <div class="col-lg-3">
        <img src="img/Gucci_logo.png" alt="image" srcset="" class="img img-fluid img-thumbnail">
      </div>
      <div class="col-lg-3">
        <img src="img/Burberry-Logo.png" alt="image" srcset="" class="img img-fluid img-thumbnail">
      </div>
    </div>
    <hr class="featurette-divider">
  </div>

  <!-- Footer -->

  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
