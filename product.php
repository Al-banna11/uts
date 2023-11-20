<?php
require 'function.php';

$sql = "SELECT * FROM catalog LIMIT 6";
$all_product = $conn->query($sql);

$user_id = $_SESSION['user_id'];
$showTotPri = $conn->query("SELECT COUNT(*) AS amount FROM cart WHERE user_id = $user_id && status = 'ordered'");
$result = $showTotPri->fetch_assoc();

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elite Estates | Properti Rumah</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

  
  

  <style>
    .link-secondary,
    .text-secondary,
    .text-reset,
    .p-4,
    .p,
    .h6 {
      color: white !important;
    }
  </style>

</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-0">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="Assets/logo.png" height="50" alt="MDB Logo" loading="lazy" />
      </a>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link  active  text-success" href="product.php">Properti</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="cart.php">Cart
              <?php if ($showTotPri->num_rows <= 0) { ?>

              <?php } else { ?>
                <span class="badge badge-pill bg-danger ms-3">
                  <?= $result['amount'] ?>
                </span>
              <?php } ?>
            </a>
          </li>
        </ul>

        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- button -->
        <a href="logout.php" type="button" class="btn btn-success shadow-0 text-capitalize"
          onclick="redirectToContactPage()">Login
          Out</a>


        <!-- Right elements -->
      </div>
      <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  <!-- paket -->

  <div class="container paket">
    <div class="row d-flex justify-content-center mb-3">
      <div class="col-md-6 text-center">
      <h1 class="fw-bold">Luxurious Home for Sale</h1>
    <p class="fs-5">Discover your dream home with Elite Estates. Our luxurious homes offer a perfect blend of comfort and style.</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12"></div>
      <div class="row row-cols-1 row-cols-md-3 g-5 mb-12">

        <?php
        while ($row = mysqli_fetch_assoc($all_product)) {
          if ($row !== null && isset($row["image_url"], $row["product_name"], $row["price"], $row["description"], $row["class"])) {

            ?>
            <div class="col">
              <div class="card shadow">
                <div class="pt-3 pe-3 ps-3">
                  <img src="<?php echo $row["image_url"]; ?>" class="card-img-top" alt="Hollywood Sign on The Hill" />
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <p class="pangkat text-success fw-bold mt-2">
                      <?php echo $row["class"]; ?>
                    </p>
                    <span class="badge rounded-pill h-50 px-3 py-2 badge-info badge-card badge-card">Best Seller</span>
                  </div>
                  <p class="card-title fw-bold">
                    <?php echo $row["product_name"]; ?>
                  </p>
                  <p class="card-text fw-bold">IDR
                    <?php echo $row["price"]; ?> / <strong style="color: #1DA599;">person</strong>
                  </p>
                  <div class="d-flex">
                    <p class="me-3">
                    <img src="Assets/Service.png" alt="Elite Estates" style="width: 30px; height: 30px;"> 

                    </p>
                    <p class="me-3">
                    <img src="Assets/robot.png" alt="" style="width: 30px; height: 30px;"> 

                    </p>
                    <p class="me-3">
                    <img src="Assets/t.png" alt="" style="width: 30px; height: 30px;"> 
                    </p>
                    <p class="me-3">
                    <img src="Assets/Visas.png" alt="" style="width: 30px; height: 30px;"> 

                    </p>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <button type="button" class="btn btn-outline-success mt-1 text-capitalize" data-mdb-toggle="modal"
                      data-mdb-target="#exampleModal-<?php echo nl2br($row["product_id"]); ?>"
                      data-mdb-ripple-color="dark">View
                      detail</button>
                    <div class="form-outline ms-2" style="width: 35%; height: 15%;">
                      <form method="post">

                        <input type="number" name="quantity" class="form-control">
                        <label class="form-label text-muted mt-1 text-center" style="font-size: 10px;"
                          for="typeNumber">Amount</label>
                    </div>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal-<?php echo nl2br($row["product_id"]); ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <?php echo nl2br($row["description"]); ?>
                        </div>
                        <div class="modal-footer">

                          <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                          <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                          <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                          <input type="hidden" name="price" value="<?php echo $row['price']; ?>">
                          <button type="submit" class="btn btn-outline-success mt-1 text-capitalize"
                            data-mdb-ripple-color="dark" name="addCart">Add to Cart</button>
                          </form>

                          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
        }
        ?>
      </div>
    </div>

  </div>
  </div>

  <!-- end paket -->


<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">


    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
          <img src="Assets/logo.png" alt="Elite Estates" style="width: 40%; height: 40%;"> Elite Estates

          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Tipe 21</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Tipe 45</a>
        </div>
        <!-- Grid column -->



        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Komplek Danamon jalan Primadana 8, Jatiasih, Bekasi
</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

</footer>
<!-- Footer -->



  <script>
    function redirectToContactPage() {
      window.location.href = "contact.php";
    }
  </script>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>

</body>

</html>