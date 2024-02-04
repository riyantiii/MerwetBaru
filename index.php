<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Merwet</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/gallery/crb.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
  <link rel="stylesheet" href="assets/css/gijgo.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/animated-headline.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body data-vide-bg="assets/img/logins-bg.mp4">
  <!-- ? Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/gallery/crb.png" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start-->

  <!-- top subjects Area Start -->
  <div class="topic-area section-padding40">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-8">
          <div class="section-tittle text-center mb-55">
            <img src="assets/img/gallery/crb.png" height="235" width="235"></a><br>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12">
          <div class="section-tittle text-center mb-55">
            <!-- Image Modal Layanan -->
            <img src="assets/img/gallery/layananan.png" height="267" width="215" data-bs-toggle="modal" data-bs-target="#layanan">

            <!-- Menu Modal Layanan -->
            <div class="modal fade" id="layanan" aria-hidden="true" aria-labelledby="layananLabel" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-2 fw-bold" id="layananLabel">Pilih Sesuai Kebutuhan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="row">
                            <div class="col-md-6 list-group list-group-flush">
                              <a href="#" class="list-group-item list-group-item-action list-group-item-light text-left" data-bs-toggle="modal" data-bs-target="#DataLahir">
                                Data Lahir
                              </a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-light text-left" data-bs-toggle="modal" data-bs-target="#DataMeninggal">
                                Data Meninggal
                              </a>
                            </div>
                            <div class="col-md-6 list-group list-group-flush">
                              <a href="#" class="list-group-item list-group-item-action list-group-item-light text-left" data-bs-toggle="modal" data-bs-target="#DataPendatang">
                                Data Pendatang
                              </a>
                              <a href="#" class="list-group-item list-group-item-action list-group-item-light text-left" data-bs-toggle="modal" data-bs-target="#DataPindah">
                                Data Pindah
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Menu Modal Layanan -->

            <!-- Input NIK Data Lahir Modal -->
            <div class="modal fade" id="DataLahir" aria-hidden="true" aria-labelledby="DataLahirLabel2" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-3 fw-bold" id="DataLahirLabel2">CARI NIK DATA LAHIR</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                      <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <input class="form-control" name="NIK" id="NIK" type="text" placeholder="Masukkan Nik..">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <button type="button" class="btn btn-secondary">Cari</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#layanan" data-bs-toggle="modal">Kembali</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Input NIK Data Lahir Modal -->

            <!-- Input NIK Data Meninggal Modal -->
            <div class="modal fade" id="DataMeninggal" aria-hidden="true" aria-labelledby="DataMeninggalLabel3" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-3 fw-bold" id="DataMeninggalLabel3">CARI NIK DATA MENINGGAL</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                      <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <input class="form-control" name="NIK" id="NIK" type="text" placeholder="Masukkan Nik..">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <button type="button" class="btn btn-secondary">Cari</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#layanan" data-bs-toggle="modal">Kembali</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Input NIK Data Meninggal Modal -->

            <!-- Input NIK Data Pendatang Modal -->
            <div class="modal fade" id="DataPendatang" aria-hidden="true" aria-labelledby="DataPendatangLabel4" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-3 fw-bold" id="DataPendatangLabel4">CARI NIK DATA PENDATANG</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                      <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <input class="form-control" name="NIK" id="NIK" type="text" placeholder="Masukkan Nik..">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <button type="button" class="btn btn-secondary">Cari</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#layanan" data-bs-toggle="modal">Kembali</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Input NIK Data Pendatang Modal -->


            <!-- Input NIK Data Pindah Modal -->
            <div class="modal fade" id="DataPindah" aria-hidden="true" aria-labelledby="DataPindahLabel5" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-3 fw-bold" id="DataPindahLabel5">CARI NIK DATA PINDAH</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="col-lg-12">
                      <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                          <div class="col-8">
                            <div class="form-group">
                              <input class="form-control" name="NIK" id="NIK" type="text" placeholder="Masukkan Nik..">
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="form-group">
                              <button type="button" class="btn btn-secondary">Cari</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#layanan" data-bs-toggle="modal">Kembali</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Input NIK Data Pindah Modal -->

            <!-- Button trigger modal -->
            <img src="assets/img/gallery/msyrkt.png" height="200" width="200" data-bs-toggle="modal" data-bs-target="#masyarakat">
            <!-- Modal Kependudukan -->
            <div class="modal fade" id="masyarakat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-2 fw-bold" id="exampleModalLabel">Ajukan Pengaduan Anda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                    
                      <div class="col-lg-12">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama anda..'" placeholder="Nama anda..">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email anda '" placeholder="Email anda..">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" placeholder="Ketik Pengaduan Anda..."></textarea>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                      <button type="button" class="btn btn-primary">Kirim</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <img src="assets/img/gallery/pnduduk.png" height="270" width="210" data-bs-toggle="modal" data-bs-target="#penduduk">
            <!-- Modal Kependudukan -->
            <div class="modal fade" id="penduduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Sesuai Kebutuhan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>

            <img src="assets/img/gallery/berita.png" height="202" width="210"></a>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- top subjects End -->

  <!-- Footer Link -->
  <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="./assets/js/jquery.slicknav.min.js"></script>

  <!-- Video bg -->
  <script src="./assets/js/jquery.vide.js"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="./assets/js/owl.carousel.min.js"></script>
  <script src="./assets/js/slick.min.js"></script>
  <!-- One Page, Animated-HeadLin -->
  <script src="./assets/js/wow.min.js"></script>
  <script src="./assets/js/animated.headline.js"></script>
  <script src="./assets/js/jquery.magnific-popup.js"></script>

  <!-- Date Picker -->
  <script src="./assets/js/gijgo.min.js"></script>
  <!-- Nice-select, sticky -->
  <script src="./assets/js/jquery.nice-select.min.js"></script>
  <script src="./assets/js/jquery.sticky.js"></script>
  <!-- Progress -->
  <script src="./assets/js/jquery.barfiller.js"></script>

  <!-- counter , waypoint,Hover Direction -->
  <script src="./assets/js/jquery.counterup.min.js"></script>
  <script src="./assets/js/waypoints.min.js"></script>
  <script src="./assets/js/jquery.countdown.min.js"></script>
  <script src="./assets/js/hover-direction-snake.min.js"></script>

  <!-- contact js -->
  <script src="./assets/js/contact.js"></script>
  <script src="./assets/js/jquery.form.js"></script>
  <script src="./assets/js/jquery.validate.min.js"></script>
  <script src="./assets/js/mail-script.js"></script>
  <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

  <!-- Jquery Plugins, main Jquery -->
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/main.js"></script>

</body>

</html>