<?php session_start(); 


if(isset($_POST['submit'])){

    if(isset($_SESSION['product_counter'])){
        $_SESSION['product_counter']=$_SESSION['product_counter']+1;
       
      
    }else{
        $_SESSION['product_counter']=1;
        $_SESSION['product_name']=array();
        $_SESSION['product_price']=array();
    }

    $_SESSION['product_name'][$_SESSION['product_counter']]=$_POST['product_name'];
    $_SESSION['product_price'][$_SESSION['product_counter']]=$_POST['product_price'];
    

    

}

if(isset($_POST['destroy'])){
session_destroy();
}
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link href="style/style.css" rel="stylesheet" >
  </head>
  <body>
    
    <div class="col-md-12">
    <nav class="mynav navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">GroceryBuy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>

            <ul class="navbar-nav  mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cart.php"><span class="badge bg-primary"><?php  if(isset($_SESSION['product_counter'])){  echo $_SESSION['product_counter']; }else{ echo "0"; } ?></span>Cart</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </div>
  <div class="hero-area col-md-12" text-center>
      <div class="container">
      <div class="row">

      <div class="col-md-6" text-center hero-text>
        <h1>Welcome to My Store</h1>
        <h4>This is a famous Grocery Store</h4>
        <button class="btn btn-success">Shop Now</button>

     </div>

     <div class="col-md-6">

      <img src="img/grocerycart.jpg" class="img-fluid" alt="">
     </div>

    </div>
    </div>

  </div>

    <div class="product-area text-center">
      <br>
      <br>
      <h1>Grocery Items</h1>
      <br>
      <br>
      <div class="container">
        
        <div class="row">

            <div class="col-md-4">
              <img src="img/milk2.jpg" class="img-fluid" alt="">
              <h4>Skimmed Milk</h4>
              <h4>CAD $7.40</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Skimmed Milk">
              <input type="hidden" name="product_price" value="$7.40">
              <button type="submit" name="submit"class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="col-md-4">
              <img src="img/apples.jpg" class="img-fluid" alt="">
              <h4>Apples</h4>
              <h4>CAD $2.20</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Apples">
              <input type="hidden" name="product_price" value="$2.20">
              <button type="submit" name="submit" class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="col-md-4">
              <img src="img/lettuce.jpg" class="img-fluid" alt="">
              <h4>Romaine Lettuce</h4>
              <h4>CAD $11.50</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Romaine Lettuce">
              <input type="hidden" name="product_price" value="$11.50">
              <button type="submit" name="submit" class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="col-md-4">
              <img src="img/bananas.jpg" class="img-fluid" alt="">
              <h4>Bananas</h4>
              <h4>CAD $4.40</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Bananas">
              <input type="hidden" name="product_price" value="$4.40">
              <button type="submit" name="submit" class="btn btn-success" >Add To Cart</button>

              </form>
      
            </div>
      
            <div class="col-md-4">
              <img src="img/oranges.jpg" class="img-fluid" alt="">
              <h4>Oranges</h4>
              <h4>CAD $8</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Oranges">
              <input type="hidden" name="product_price" value="$8">
              <button type="submit" name="submit"  class="btn btn-success" >Add To Cart</button>

              </form>
      
      
            </div>
      
            <div class="col-md-4">
              <img src="img/pepper.jpg" class="img-fluid" alt="">
              <h4>Pepper</h4>
              <h4>CAD $9.60</h4>
              <form action="" method="POST">
              <input type="hidden" name="product_name" value="Pepper">
              <input type="hidden" name="product_price" value="$9.60">
              <button type="submit" name="submit" class="btn btn-success"  >Add To Cart</button>

              </form>
      
            </div>
      
      
      
      
            </div>
      
        </div>

        

      </div>


      <footer class="bg-dark text-light py-4">
        <div class="container">
          <div class="row">
            <div class="text-center">
              <p> Developed by Harleen &copy;</p>
          </div>
            <div class="col-md-6">
              <h5>Contact Information</h5>
              <p>Email: harleenGrocery@.com</p>
              <p>Phone: +1 (123) 456 7894</p>
            </div>
             
          </div>
        </div>
      </footer>
        

    <script src="js/bootstrap.bundle.min.js" ></script>
  </body>
</html>