<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">RASHiiiTECH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/clock pic.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/app.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/bar.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- //////////////////////////////////// -->
<section class="my-5"> 
      <div class="pb-5">
        <h2 class="text-center">ABOUT US</h2>
      </div>
      
      <div class="container-fluid">
    <div class="row">
      <div class="col col-lg-6 col-md-6 col-sm-12">
      <img src="images/company.jpg" class="aboutimg">
      </div>
      <div class="col col-lg-6 col-md-6 col-sm-12">
      <h2 class="display-4">I am RASHiiiTECH.</h2>
           <p class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias quam quo consequatur,
             inventore, quaerat totam nesciunt dolore blanditiis ullam ex ratione repellat illo eveniet 
             explicabo sint ad, optio doloribus earum!
           </p>
           <a href="about.php" class="btn btn-success">Check More</a>
      </div>
    </div>
  <div>
  
  <section class="my-5"> 
      <div class="pb-5">
        <h2 class="text-center">OUR SERVICES</h2>
      </div>
      
      <!-- //// -->
      <div class="container-fluid">
  <div class="row">
    
    <!-- <div class="col col-lg-3">
    <div class="card" style="width: 18rem;">
  <img src="images/pizza.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div> -->

    <div class="col col-lg-3 col-md-6 col-sm-12">
    <div class="card" style="width: 18rem;">
  <img src="images/mobile app.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>

    <div class="col col-lg-3 col-md-6 col-sm-12">
     <div class="card" style="width: 18rem;">
        <img src="images/mobile app.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col col-lg-3 col-md-6 col-sm-12">
     <div class="card" style="width: 18rem;">
        <img src="images/mobile app.jpg" class="card-img-top" alt="...">
        <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <div class="col col-lg-3 col-md-6 col-sm-12">
     <div class="card" style="width: 18rem;">
        <img src="images/mobile app.jpg" class="card-img-top " alt="...">
        <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  </div>
<div>
      <!-- //// -->
</section>

<section class="my-5"> 
      <div class="pb-5">
        <h2 class="text-center">OUR GALLERY</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
           <div class="col col-lg-4 col-md-6 col-sm-12">
             <img src="images/software.jpg" class="img-fluid pb-4"/>
           </div>
          
           <div class="col col-lg-4 col-md-6 col-sm-12">
             <img src="images/software.jpg" class="img-fluid"/>
           </div>
           
           <div class="col col-lg-4 col-md-6 col-sm-12">
             <img src="images/software.jpg" class="img-fluid"/>
           </div>

           <div class="col col-lg-4 col-md-6 col-sm-12">
             <img src="images/software.jpg" class="img-fluid"/>
           </div>

           <div class="col col-lg-4 col-md-6 col-sm-12">
              <img src="images/software.jpg" class="img-fluid"/>
           </div>

           <div class="col col-lg-4 col-md-6 col-sm-12">
             <img src="images/software.jpg" class="img-fluid"/>
           </div>
        </div>
      </div>
</section>
<!-- /////////////////////////////////////////// -->
<section class="my-5"> 
      <div class="pb-5">
        <h2 class="text-center">CONTACT US</h2>
      </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <label>User Name</label>
          <input type="text" name="user" autocomplete="off" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Email Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control"/>
          </div>
          <div class="form-group">
            <label>Comments</label>
          <textarea class="form-control" name="comment"></textarea>
          </div>
          <button type="submit" class="btn btn-success mt-2">Submit</button>

        </form>
      </div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@RASHiiiTECHPRODUCTION</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>