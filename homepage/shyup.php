<?php
$src = "../shyup_bank/shyup_bank_output.php";
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
          <h1 class="my-4">Each Bank</h1>
          <div class="list-group">
	    <a href="index.php" class="list-group-item">CITI BANK</a>
   	    <a href="daegoo.php" class="list-group-item">DAEGOO BANK</a>
	    <a href="ibk.php" class="list-group-item">IBK BANK</a>
	    <a href="jb.php" class="list-group-item">JB BANK</a>
	    <a href="jeju.php" class="list-group-item">JEJU BANK</a>
	    <a href="kb.php" class="list-group-item">KB BANK</a>
	    <a href="keb.php" class="list-group-item">KEB BANK</a>
	    <a href="bnk.php" class="list-group-item">BNK BANK</a>
	    <a href="kn.php" class="list-group-item">KYUNGNAM BANK</a>
	    <a href="shinhan.php" class="list-group-item">SHINHAN BANK</a>
	    <a href="nh.php" class="list-group-item">NH BANK</a>
	    <a href="shyup.php" class="list-group-item">SHYUP BANK</a>
	    <a href="sc.php" class="list-group-item">STANDARD CHARTERED BANK</a>
	    <a href="woori.php" class="list-group-item">WOORI BANK</a>


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
