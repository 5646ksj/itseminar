<?php
$src = "../money/aud.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BankExchange</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">

  </head>

  <body>
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">BankExchange</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Each Bank
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="EC.php">Each Currency</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Currency</h1>
          <div class="list-group">
	    <a href="usd.php" class="list-group-item">미국USD</a>
   	    <a href="jpy.php" class="list-group-item">일본JPY</a>
	    <a href="eur.php" class="list-group-item">유로EUR</a>
	    <a href="cny.php" class="list-group-item">중국CNY</a>
	    <a href="hkd.php" class="list-group-item">홍콩HKD</a>
	    <a href="thb.php" class="list-group-item">태국THB</a>
	    <a href="twd.php" class="list-group-item">대만TWD</a>
	    <a href="php.php" class="list-group-item">필리핀PHP</a>
	    <a href="sgd.php" class="list-group-item">싱가포르SGD</a>
	    <a href="aud.php" class="list-group-item">호주AUD</a>
	    <a href="gbp.php" class="list-group-item">영국GBP</a>
	    <a href="cad.php" class="list-group-item">캐나다CAD</a>
	    <a href="myr.php" class="list-group-item">러시아MYR</a>
	    <a href="inr.php" class="list-group-item">인도INR</a>


          </div>
        </div>
<!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div class="card mt-4">
            
	  <iframe src ="<?php echo $src; ?> "  width = "800" height = "800" name = "output_view" ></iframe>  
	  <div class="card-body"></div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    
  </body>

</html>
