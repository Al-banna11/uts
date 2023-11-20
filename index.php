<?php
require 'function.php';

$user_id = $_SESSION['user_id'];
$showTotPri = $conn->query("SELECT COUNT(*) AS amount FROM cart WHERE user_id = $user_id && status = 'ordered'");
$result = $showTotPri->fetch_assoc();

$random_number = rand(100000, 999999);
// echo $random_number;
?>


<?php
// $recipient = $_POST['recipient'];
// $subject = $_POST['subject'];
// $body = $_POST['body'];

// $scriptUrl = "https://script.google.com/macros/s/AKfycbzkmD758YcgYCfOgf7F51L3cjyao7Qoo5hIWU_mpqY9d2RYyzd_Uc2eEiIjiuJZ4hC56w/exec";

// $data = array(
//    "recipient" => $recipient,
//    "subject" => $subject,
//    "body" => $body,
//    "isHTML" => 'true'
// );

// $ch = curl_init($scriptUrl);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// $result = curl_exec($ch);
// echo $result;

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Elite Estates | Properti Rumah</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Example using Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 



  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<script></script>

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
            <a class="nav-link active text-success" href="#">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="product.php">Properti</a>
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

   <!-- Hero Section -->
   <section id="Hero">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6  hero-tagline my-auto">
                    <h1>Membantu Temukan Rumah Impian.</h1>
                    <p>Rumah Impian hadir untuk temukan rumah terbaik untukmu, untuk di jual ataupun di sewa dengan sumber terpercaya.
                    </p>
                    <a href="#Rekomendasi">
                    <button class="button-lg-primary badge"> Temukan Rumah</button>
                    </a>
               
                    <a href="#Rekomendasi">
                        <img src="assets/arrow (3).png " alt="">
                    </a>
                </div>
            </div>
            <img src="assets/Hero1.png" alt="" class="position-absolute end-0 bottom-0 img-hero">
            <img src="assets/Accsent.png" alt="" class=" Accsent-img h-100 position-absolute top-0 start-0">
        </div>
    </section>
    <!-- Hero Section End-->

    <!-- Layanan-->
    <section id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h2 class="fw-bolder">Layanan Kami</h2>
                    <span class="sub-title "> Rumah impian hadir menjadi solusi bagi kamu </span>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-md-4 text-center ">
                    <div class="card-layanan l-4 ">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="Assets/Icon-propertybaru.png" alt="" class="position-absolute top-50 start-50 translate-middle ">
                        </div>
                        <h3 class="mt-4 par2 fw-bold">Property Baru</h3>
                        <p mt-3>Rumah impian kini jadi kenyataan, Beli rumah Baru dengan fasilitas terbaik dengan lingkungan yang nyaman.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan mr-4">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="Assets/Icon Sewa.png" alt="" class="position-absolute top-50 start-50 translate-middle ">
                        </div>
                        <h3 class="mt-4 par2 fw-bold">Sewa Rumah</h3>
                        <p mt-3>Sewa rumah yang indah untuk keluarga anda, pilihan terbaik untuk tempat tinggal keluarga mu.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-layanan mr-4">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="Assets/Icon Beli.png" alt="" class="position-absolute top-50 start-50 translate-middle ">
                        </div>
                        <h3 class="mt-4 par2 fw-bold">Beli Rumah</h3>
                        <p mt-3>Beli Rumah sempurna dengan harga terbaik kualitas terjamin dari sumber terpercaya.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Layanan End-->



    <!-- Seacrh Section-->
    <section id="seacrh" class="d-flex align-items-center">
        <div class="class container">
            <div class="clas row">
                <div class="class col-12 text-center">
                    <h2>Temukan Rumah Impianmu</h2>

                    <P>sekarang Anda dapat menghemat semua hal stres, waktu, dan biaya tersembunyi, dengan ratusan rumah untuk anda
                    </P>
                </div>


                <div class="class col-10 mx-auto mt-5">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#Jual" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Jual</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#Sewa" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Sewa</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Property-Baru" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Property Baru </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="Jual" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Jual" role="tabpanel" aria-labelledby="home-tab" tabindex="0">


                                    <!--Dropdown Tipe Rumah-->
                                    <div class="input-group input-cari mb-3">
                                        <button class="button-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="Assets/Home Icon.png" alt="">Tipe Rumah</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Tipe 21</a></li>
                                            <li><a class="dropdown-item" href="#">Tipe 45</a></li>
                                        </ul>

                                        <!--Dropdown Range Harga-->
                                        <button class="button-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="Assets/Money-icon.png" alt="">Range Harga</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">200.00.000</a></li>
                                            <li><a class="dropdown-item" href="#">600.00.000</a></li>
                                            <li><a class="dropdown-item" href="#">770.00.000</a></li>
                                        </ul>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Beranda Lokasi, ID, Property">
                                        <button class="button-primary" type="button" id="button-addon2"  id="search">Cari</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="Sewa" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Jual" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <!--Dropdown Tipe Rumah-->
                                    <div class="input-group input-cari mb-3">
                                        <button class="button-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="Assets/Home Icon.png" alt="">Tipe Rumah</button>
                                        <ul class="dropdown-menu">
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Tipe 21</a></li>
                                            <li><a class="dropdown-item" href="#">Tipe 45</a></li>
                                        </ul>
                                        </ul>

                                        <!--Dropdown Range Harga-->
                                        <button class="button-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="Assets/Money-icon.png" alt="">Range Harga</button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">200.00.000</a></li>
                                            <li><a class="dropdown-item" href="#">600.00.000</a></li>
                                            <li><a class="dropdown-item" href="#">770.00.000</a></li>
                                        </ul>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Beranda Lokasi, ID, Property">
                                        <button class="button-primary" type="button" id="button-addon2"  id="search">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--------Dropdown Tipe Rumah-------->
                        <div class="tab-pane fade" id="Property-Baru" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Jual" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                    <!--Dropdown Tipe Rumah-->
                                    <div class="input-group input-cari mb-3">
                                        <button class="button-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="Assets/Home Icon.png" alt="">Tipe Rumah</button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tipe 21</a></li>
                                            <li><a class="dropdown-item" href="#">Tipe 45</a></li>
                                        </ul>

                                        <!--Dropdown Range Harga-->
                                        <button class="button-secundary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="Assets/Money-icon.png" alt="">Range Harga</button>
                                        <ul class="dropdown-menu">
                                             <li><a class="dropdown-item" href="#">200.00.000</a></li>
                                            <li><a class="dropdown-item" href="#">600.00.000</a></li>
                                            <li><a class="dropdown-item" href="#">770.00.000</a></li>
                                        </ul>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Cari Beranda Lokasi, ID, Property">
                                        <button class="button-primary" type="button" id="button-addon2"  id="search">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Seacrh End-->

    <!-- Rekomendasi Section-->
    <section id="Rekomendasi">
        <div class=" container " style="margin-top:60px">
            <div class=" row d-flex justify-content-center mb-5">
                <div class="col-12 text-center">
                    <h2>Rekomendasi Rumah Untuk Mu</h2>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="class card p-1" style="width: 22rem;">
                        <img src="Assets/paket1.png" alt=" " style="border-radius: 2%; ">
                        <div class="class card-body">
                            <h4>IDR.200.00.000</h4>
                            <p class="mb-4 lh-sm">Komplek Danamon jalan Primadana 8, Jatiasih, Bekasi <br> <span class="text-danger">Beli</span></p>
                        </div>

                        <div class="class card-fasilitas d-flex justify-content-between px-4">
                            <span class="">
                <img src="Assets/Icon Kamar Tidur.png" alt=""> 3
                <p>Kamar Tidur</p>
              </span>

                            <span>
                <img src="Assets/Icon Kamar Mandi.png" alt=""> 4
                <p>Kamar Mandi</p>
              </span>

                            <span>
                <img src="Assets/Icon Luas Tanah.png" alt=""> 360m
                <p>Kamar Luas Rumah</p>
              </span>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center mb-4">
                    <div class="class card p-1" style="width: 22rem;">
                        <img src="Assets/paket2.png" alt="" style="border-radius: 2%; ">
                        <div class="class card-body">
                            <h4>IDR.600.00.000</h4>
                            <p class="mb-4 lh-sm">Komplek Danamon jalan Primadana 8, Jatiasih, Bekasi <br> <span class="text-danger">Sewa</span></p>
                        </div>

                        <div class="class card-fasilitas d-flex justify-content-between px-4">
                            <span class="">
                <img src="Assets/Icon Kamar Tidur.png" alt=""> 5
                <p>Kamar Tidur</p>
              </span>

                            <span>
                <img src="Assets/Icon Kamar Mandi.png" alt=""> 2
                <p>Kamar Mandi</p>
              </span>

                            <span>
                <img src="Assets/Icon Luas Tanah.png" alt=""> 490m
                <p>Kamar Luas Rumah</p>
              </span>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center mb-4">
                    <div class="class card p-1" style="width: 22rem;">
                        <img src="Assets/paket3.png" alt="" style="border-radius: 2%; ">
                        <div class="class card-body">
                            <h4>IDR.770.00.000</h4>
                            <p class="mb-4 lh-sm">Komplek Danamon jalan Primadana 8, Jatiasih, Bekasi <br> <span class="text-danger">Sewa</span></p>
                        </div>

                        <div class="class card-fasilitas d-flex justify-content-between px-4">
                            <span class="">
                <img src="Assets/Icon Kamar Tidur.png" alt=""> 4
                <p>Kamar Tidur</p>
              </span>

                            <span>
                <img src="Assets/Icon Kamar Mandi.png" alt=""> 4
                <p>Kamar Mandi</p>
              </span>

                            <span>
                <img src="Assets/Icon Luas Tanah.png" alt=""> 360m
                <p>Kamar Luas Rumah</p>
              </span>

                        </div>
                    </div>
                </div>
                <div class="class d-flex justify-content-center col-md-4 mb-4">
                    <div class="class card p-1" style="width: 22rem;">
                        <img src="Assets/paket4.png" alt="" style="border-radius: 2%; ">
                        <div class="class card-body">
                            <h4>IDR.200.00.000</h4>
                            <p class="mb-4 lh-sm">Komplek Asabri blok K, Jatiasih, Bekasi <br> <span class="text-danger">Sewa</span>
                            </p>
                        </div>

                        <div class="class card-fasilitas d-flex justify-content-between px-4">
                            <span class="">
                <img src="Assets/Icon Kamar Tidur.png" alt=""> 5
                <p>Kamar Tidur</p>
              </span>

                            <span>
                <img src="Assets/Icon Kamar Mandi.png" alt=""> 3
                <p>Kamar Mandi</p>
              </span>

                            <span>
                <img src="Assets/Icon Luas Tanah.png" alt=""> 435m
                <p>Kamar Luas Rumah</p>
              </span>

                        </div>
                    </div>
                </div>
                <div class=" d-flex justify-content-center class col-md-4 mb-4">
                    <div class="class card p-1" style="width: 22rem;">
                        <img src="Assets/paket5.png" alt="" style="border-radius: 2%; ">
                        <div class="class card-body">
                            <h4>IDR.200.00.000</h4>
                            <p class="mb-4 lh-sm">Komplek Asabri blok K, Jatiasih, Bekasi <br> <span class="text-danger">Beli</span>
                            </p>
                        </div>

                        <div class="class card-fasilitas d-flex justify-content-between px-4">
                            <span class="">
                <img src="Assets/Icon Kamar Tidur.png" alt=""> 4
                <p>Kamar Tidur</p>
              </span>

                            <span>
                <img src="Assets/Icon Kamar Mandi.png" alt=""> 3
                <p>Kamar Mandi</p>
              </span>

                            <span>
                <img src="Assets/Icon Luas Tanah.png" alt=""> 420m
                <p>Kamar Luas Rumah</p>
              </span>

                        </div>
                    </div>
                </div>
                <div class="class d-flex justify-content-center col-md-4 mb-4">
                    <div class="class card p-1"   style="width: 22rem;">
                        <img src="Assets/paket6.png" alt=""  style="border-radius: 2%; ">
                        <div class="class card-body">
                            <h4>IDR.200.00.000</h4>
                            <p class="mb-4 lh-sm">Komplek Asabri blok K, Jatiasih, Bekasi <br> <span class="text-danger">Beli</span>
                            </p>
                        </div>

                        <div class="class card-fasilitas d-flex justify-content-between px-4">
                            <span class="">
                <img src="Assets/Icon Kamar Tidur.png" alt=""> 5
                <p>Kamar Tidur</p>
              </span>

                            <span>
                <img src="Assets/Icon Kamar Mandi.png" alt=""> 3
                <p>Kamar Mandi</p>
              </span>

                            <span>
                <img src="Assets/Icon Luas Tanah.png" alt=""> 515m
                <p>Kamar Luas Rumah</p>
              </span>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- Rekomendasi End-->

    <!--  Fitur Section-->
    <section id="Fitur" class="">
        <div class="container ">
            <div class="row d-flex justify-content-between">
                <div class="col">
                    <h2>Fitur Rumah</h2>
                </div>
                <div class="col text-end">
                    <button class="button-fitur">
            Lihat Semua...
            <img src="Assets/Arrow Fitur.png" alt="">
          </button>
                </div>
            </div>

            <div class="container position-relative">
                <div class="row">
                    <div class="class scroll-fitur col-12 d-flex justify-content-start">
                        <div class="card-fitur me-3 position-relative">
                            <img src="Assets/Fitur Rumah 1.png" style="border-radius:3%;">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Living Room</h5>
                                    <span>Rumah Minimalis Type-A3</span>
                                    <h6>IDR.200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-fitur me-3 position-relative" data-aos="zoom-out">
                            <img src="Assets/Fitur Rumah 3.png" style="border-radius:3%;">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Kitchen Room</h5>
                                    <span>Rumah Minimalis Type-A3 <Type-A3></Type-A3></span>
                                    <h6>IDR.200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>

                        <div class="card-fitur me-3 position-relative">
                            <img src="Assets/Fitur Rumah 2.png" style="border-radius:3%;">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Family Room</h5>
                                    <span>Rumah Minimalis Type-A3</span>
                                    <h6>IDR.200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="Assets/Fitur Rumah 2.png" style="border-radius:3%;">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Family Room</h5>
                                    <span>Rumah Minimalis Type-A3</span>
                                    <h6>IDR.200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-fitur me-3 position-relative">
                            <img src="Assets/Fitur Rumah 2.png" style="border-radius:3%;">

                            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                    <h5>Family Room</h5>
                                    <span>Rumah Minimalis Type-A3</span>
                                    <h6>IDR.200jt</h6>
                                    <button>Lihat Rumah</button>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <button class="button-arrow-left me-2 scroll-left" id="scroll-left">
            <img src="Assets/bt fitur.png" alt="">
          </button>

            <button class="button-arrow-right ms-2 scroll-right" id="scroll-right">
            <img src="Assets/bt fitur2.png" alt="">
          </button>
        </div>

    </section>

    <!--  Fitur End-->

    <!--  Contact Section-->

    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="class col-md-6">
                        <h3>
                            Butuh Konsultasi..? Silahkan kontak kami Kami Siap Membantu
                        </h3>
                        <div class="kontak">
                            <h6>Kontak</h6>
                            <div class="mb-3 d-flex align-items-center">
                                <img class="me-3" src="Assets/Alamat Icon.png" alt="">
                                <a href="">Jl. Pelajar Pejuang 123 Majalaya Bandung
                  Indonesia</a>
                            </div>

                            <div class="mb-3">

                                <img class="me-1" src="Assets/Whatsapp icon.png" alt="">
                                <a href="#">+62 821-1460-7982</a>

                            </div>


                            <div class="mb-3">
                                <img class="me-2" src="Assets/Email Icon.png" alt="">
                                <a href="#">Elite Estates@gmail.com</a>
                            </div>
                        </div>

                        <h6>Social Media</h6>
                        <a href="" class="me-2"><img src="Assets/Facebook Icon.png"></a>
                        <a href="" class="me-2"><img src="Assets/Twiter Icon.png"></a>
                        <a href="" class="me-"> <img src="Assets/Instagram Iicon.png"></a>
                        <a href="" class="link">Elite Estates</a>

                    </div>
                    <div class="class col-md-6 mb-3">
                        <div class="card-contact w-100" >
                            <div class="d-flex justify-content-center align-items-center h-100"   >
                                <form method="post" action="">
                                    <h2>Ada Pertanyaan?</h2>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput1" placeholder="Harga Rumah Berapa min"  name="subject">
                                        <label for="floatingInput1">Pertanyaan Anda.....</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput2" placeholder="name@example.com" name="recipient">
                                        <label for="floatingInput2">Masukan Email</label>
                                    </div>

                                    <button type="submit" class="button-contact">Kirim</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--  Contact End-->






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script>
  
const scrollLeftButton = document.getElementById('scroll-left');
const scrollRightButton = document.getElementById('scroll-right');
const scrollContainer = document.querySelector('.scroll-fitur');

scrollLeftButton.addEventListener('click', () => {
    scrollContainer.scroll({
        left: scrollContainer.scrollLeft - 100,
        behavior: 'smooth'
    });
});

scrollRightButton.addEventListener('click', () => {
    scrollContainer.scroll({
        left: scrollContainer.scrollLeft + 100,
        behavior: 'smooth'
    });
});
</script>

  <script>
    // Temukan elemen ikon keranjang dengan ID "cart-icon"
    var cartIcon = document.getElementById("cart-icon");

    // Tambahkan event listener untuk mengarahkan ke "cart.php" saat ikon diklik
    cartIcon.addEventListener("click", function () {
      window.location.href = "cart.php";
    });

    // Temukan elemen ikon keranjang dengan ID "cart-icon"
    var cartIcon = document.getElementById("contact");

    // Tambahkan event listener untuk mengarahkan ke "cart.php" saat ikon diklik
    cartIcon.addEventListener("click", function () {
      window.location.href = "contact.php";
    });
  </script>


  <script>
    $(document).ready(function () {
      $('.carousell').slick({
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        centerMode: true,
        responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            // centerMode: true,

          }

        }, {
          breakpoint: 800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true,
            infinite: true,

          }
        }, {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
          }
        }]
      });
    });
  </script>
</body>

</html>