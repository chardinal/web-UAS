<?php
$conn = 'db-connection';
// Data dinamis untuk digunakan di berbagai bagian website
$title = "DevSync";
$contact_info = [
    "name" => "DevSync",
    "address" => "Sistem Informasi, Fakultas Teknik, Universitas Negeri Surabaya.",
    "phone" => "081213141516",
    "email" => "devsync@gmail.com"
];

// Proses formulir kontak
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validasi sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Simulasi pengiriman email (dapat disesuaikan untuk menggunakan fungsi mail atau menyimpan ke database)
        echo "<script>alert('Pesan berhasil dikirim!');</script>";
    } else {
        echo "<script>alert('Mohon lengkapi semua field.');</script>";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="img/logo_baru_devsync.jpg" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
</head>
<body>

 <!--Header_section-->
 <header id="header_wrapper">
    <div class="container">
      <div class="header_box">
        <div class="logo"><a href="#"><img src="img/logo+nama.png" alt="logo" width="140"></a></div>
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="main-nav" class="collapse navbar-collapse navStyle">
            <ul class="nav navbar-nav" id="mainNav">
              <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
              <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
              <li><a href="#service" class="scroll-link">Services</a></li>
              <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>
              <li><a href="#clients" class="scroll-link">Clients</a></li>
              <li><a href="#team" class="scroll-link">Team</a></li>
              <li><a href="#contact" class="scroll-link">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--Header_section-->

  <!--Hero_Section-->
  <section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
      <div class="container">
        <div class="hero_section">
          <div class="row">
            <div class="col-lg-5 col-sm-7">
              <div class="top_left_cont zoomIn wow animated">
                <h2>Wujudkan Aplikasi Mobile <strong>Impian Anda</strong> dengan Fitur Unggulan</h2>
                <p>Kembangkan bisnis anda dengan aplikasi custom! Kami siap <br> membantu mewujudkan solusi digital yang
                  sesuai kebutuhan anda</p>
                <a href="#service" class="read_more2">Read more</a>
              </div>
            </div>
            <div class="col-lg-7 col-sm-5">
              <img src="img/beranda.jpeg" width="500" class="zoomIn wow animated" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Hero_Section-->

  <section id="aboutUs"><!--Aboutus-->
    <div class="inner_wrapper">
      <div class="container">
        <h2>About Us</h2>
        <div class="inner_section">
          <div class="row">
            <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/about-img.jpg"
                class="img-circle delay-03s animated wow zoomIn" alt=""></div>
            <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
              <div class=" delay-01s animated fadeInDown wow animated">
                <h3>Membangun Aplikasi Mobile yang Inovatif dengan Fitur Unggulan..</h3><br />
                <p>DevSync adalah sebuah perusahaan yang bergerak pada jasa pembuatan aplikasi mobile dengan fokus pada
                  inovasi dan kualitas tinggi. Kami menawarkan desain modern dan responsif, teknologi terbaru, keamanan
                  tinggi, optimasi SEO, kolaborasi tim, pengalaman pengguna optimal, dan dukungan penuh setelah
                  peluncuran.</p><br>
                <p>Sebagai perusahaan yang juga mengkhususkan diri dalam jasa desain aplikasi mobile, kami memahami
                  pentingnya tampilan yang menarik dan fungsionalitas yang intuitif. Tim desainer kami bekerja sama
                  dengan pengembang untuk menciptakan antarmuka pengguna (UI) yang tidak hanya estetis tetapi juga
                  memberikan
                  pengalaman pengguna (UX) yang luar biasa. Kami berkomitmen untuk menghadirkan solusi desain yang
                  sesuai dengan kebutuhan spesifik klien kami, memastikan setiap aplikasi mobile yang kami kembangkan
                  tidak hanya memenuhi standar industri tetapi juga mencerminkan identitas merek klien.
              </div>
              </p>
              <div class="work_bottom"> <span>Ingin Tahu Lebih Banyak?</span> <a href="#contact"
                  class="contact_btn">Contact Us</a> </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>
  <!--Aboutus-->


  <!--Service-->
  <section id="service">
    <div class="container">
      <h2>Services</h2>
      <div class="service_wrapper">
        <div class="row">
          <div class="col-lg-4">
            <div class="service_block">
              <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-android"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">Android</h3>
              <p class="animated fadeInDown wow">Desain ini dapat menyesuaikan dengan berbagai macam android tanpa
                adanya gangguan.</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft">
            <div class="service_block">
              <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-apple"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">Apple IOS</h3>
              <p class="animated fadeInDown wow">Desain ini dapat menyesuaikan dengan berbagai macam iphone tanpa adanya
                gangguan.</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft">
            <div class="service_block">
              <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-html5"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">Design</h3>
              <p class="animated fadeInDown wow">mengutamakan desain modern dan intuitif yang tidak hanya menarik secara
                visual tetapi juga meningkatkan pengalaman pengguna..</p>
            </div>
          </div>
        </div>
        <div class="row borderTop">
          <div class="col-lg-4 mrgTop">
            <div class="service_block">
              <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-dropbox"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">Concept</h3>
              <p class="animated fadeInDown wow">Membantu klien dalam merumuskan ide-ide kreatif yang dapat memenuhi
                kebutuhan pasar dan pengguna untuk menghasilkan solusi inovatif..</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft mrgTop">
            <div class="service_block">
              <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-slack"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">User Research</h3>
              <p class="animated fadeInDown wow">Dengan melakukan wawancara, survei, dan pengujian kegunaan untuk
                memahami kebutuhan, perilaku, dan harapan pengguna.</p>
            </div>
          </div>
          <div class="col-lg-4 borderLeft mrgTop">
            <div class="service_block">
              <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-users"></i></span>
              </div>
              <h3 class="animated fadeInUp wow">User Experience</h3>
              <p class="animated fadeInDown wow">Melalui analisis mendalam tentang bagaimana pengguna berinteraksi
                dengan aplikasi untuk meningkatkan kepuasan pengguna..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Service-->




  <!-- Portfolio -->
  <section id="Portfolio" class="content">

    <!-- Container -->
    <div class="container portfolio_title">

      <!-- Title -->
      <div class="section-title">
        <h2>Portofolio</h2>
      </div>
      <!--/Title -->

    </div>
    <!-- Container -->

    <div class="portfolio-top"></div>

    <!-- Portfolio Filters -->
    <div class="portfolio">

      <div id="filters" class="sixteen columns">
        <ul class="clearfix">
          <li><a id="all" href="#" data-filter="*" class="active">
              <h5>All</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".pendidikan">
              <h5>Pendidikan</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".kesehatan">
              <h5>Kesehatan</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".travel">
              <h5>Travelling</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".E-Commerce">
              <h5>E-Commerce</h5>
            </a></li>
          <li><a class="" href="#" data-filter=".sosial">
              <h5>Sosial</h5>
            </a></li>
        </ul>
      </div>
      <!--/Portfolio Filters -->

      <!-- Portfolio Wrapper -->
      <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;"
        id="portfolio_wrapper">

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item .pendidikan one-four pendidikan isotope-item">
          <div class="portfolio_img"> <img src="img/pendidikan 1.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Language Courses App</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item-->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item .kesehatan one-four kesehatan isotope-item">
          <div class="portfolio_img"> <img src="img/kesehatan 1.jpg"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Health App</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four sosial isotope-item">
          <div class="portfolio_img"> <img src="img/sosial 1.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Social App</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item-->

        <!-- Portfolio Item-->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four travel isotope-item">
          <div class="portfolio_img"> <img src="img/travel 1.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Travel App</h4>
            </div>
          </div>
        </div>
        <!-- Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  pendidikan isotope-item">
          <div class="portfolio_img"> <img src="img/Pendidikan 2.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Education App</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four sosial isotope-item">
          <div class="portfolio_img"> <img src="img/sosial 2.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Social App</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item  -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four travel isotope-item">
          <div class="portfolio_img"> <img src="img/travel 2.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Travel App</h4>
            </div>
          </div>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item .kesehatan one-four kesehatan isotope-item">
          <div class="portfolio_img"> <img src="img/Kesehatan 2.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Health App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four travel isotope-item">
          <div class="portfolio_img"> <img src="img/travel 4.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Travel App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four travel isotope-item">
          <div class="portfolio_img"> <img src="img/travel 3.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Travel App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item .kesehatan one-four kesehatan isotope-item">
          <div class="portfolio_img"> <img src="img/kesehatan 3.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Health App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item .kesehatan one-four kesehatan isotope-item">
          <div class="portfolio_img"> <img src="img/kesehatan 4.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Health App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four sosial isotope-item">
          <div class="portfolio_img"> <img src="img/sosial 3.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Social App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four sosial isotope-item">
          <div class="portfolio_img"> <img src="img/sosial 4.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Social App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four E-Commerce android isotope-item">
          <div class="portfolio_img"> <img src="img/E commerce 1.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">E-commerce App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four pendidikan  android isotope-item">
          <div class="portfolio_img"> <img src="img/pendidikan 3.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Education App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four  pendidikan android isotope-item">
          <div class="portfolio_img"> <img src="img/Pendidikan 4.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">Education App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four E-Commerce android isotope-item">
          <div class="portfolio_img"> <img src="img/E commerce 2.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">E-commerce App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four E-Commerce android isotope-item">
          <div class="portfolio_img"> <img src="img/E commerce 3.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">E-commerce App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

        <!-- Portfolio Item -->
        <div
          style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
          class="portfolio-item one-four E-Commerce android isotope-item">
          <div class="portfolio_img"> <img src="img/E commerce 4.jpg" alt="Portfolio 1"> </div>
          <div class="item_overlay">
            <div class="item_info">
              <h4 class="project_name">E-commerce App</h4>
            </div>
          </div>
          </a>
        </div>
        <!--/Portfolio Item -->

      </div>
      <!--/Portfolio Wrapper -->

    </div>
    <!--/Portfolio Filters -->

    <div class="portfolio_btm"></div>


    <div id="project_container">
      <div class="clear"></div>
      <div id="project_data"></div>
    </div>


  </section>
  <!--/Portfolio -->
  <!-- Pricing Table Section -->
  <section class="pricing-table">
    <h2>PILIHAN PAKET</h2>
    <div class="plans">
      <div class="plan">
        <h3>BASIC</h3>
        <p class="price">Rp 2.000.000</p>
        <ul>
          <li>Aplikasi Android / iOS</li>
          <li>Unggah ke Playstore</li>
          <li>Unggah ke AppStore</li>
          <li>Durasi Pengerjaan 5 Hari</li>
          <li>Jumlah Revisi 1 Kali</li>
        </ul>
        <button onclick="window.location.href='pendaftaran.php'" class="btn">Get Now</button>
      </div>
      <div class="plan">
        <h3>STANDARD</h3>
        <p class="price">Rp 4.000.000</p>
        <ul>
          <li>Aplikasi Android / iOS</li>
          <li>Unggah ke Playstore</li>
          <li>Unggah ke AppStore</li>
          <li>Durasi Pengerjaan 10 Hari</li>
          <li>Jumlah Revisi 3 Kali</li>
        </ul>
        <button onclick="window.location.href='pendaftaran.php'" class="btn">Get Now</button>
      </div>
      <div class="plan">
        <h3>ADVANCED</h3>
        <p class="price">Rp 6.000.000</p>
        <ul>
          <li>Aplikasi Android / iOS</li>
          <li>Unggah ke Playstore</li>
          <li>Unggah ke AppStore</li>
          <li>Durasi Pengerjaan 15 Hari</li>
          <li>Jumlah Revisi 5 Kali</li>
        </ul>
        <button onclick="window.location.href='pendaftaran.php'" class="btn">Get Now</button>
      </div>
      <div class="plan">
        <h3>MIGHTY</h3>
        <p class="price">Rp 8.000.000</p>
        <ul>
          <li>Aplikasi Android / iOS</li>
          <li>Unggah ke Playstore</li>
          <li>Unggah ke AppStore</li>
          <li>Durasi Pengerjaan 20 Hari</li>
          <li>Jumlah Revisi 7 Kali</li>
        </ul>
        <button onclick="window.location.href='pendaftaran.php'" class="btn">Get Now</button>
      </div>
    </div>
  </section>
  <section class="page_section" id="clients"><!--page_section-->
    <h2>Kerjasama Universitas</h2>

    <!--page_section-->

    <div class="client_logos"><!--client_logos-->
      <div class="container">
        <ul class="fadeInRight animated wow">
          <li><a href="javascript:void(0)"><img src="img/ITS_logo.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/UI_logo.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/UGM_logo.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/Uniga.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/UC.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/Unair_logo.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/Undip.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/Usu.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/uny.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/unj.png" width="80"></a></li>
          <li><a href="javascript:void(0)"><img src="img/Logo Unesa.jpeg" width="80"></a></li>

        </ul>
      </div>
    </div>
  </section>
  <!--client_logos-->

  <section class="page_section team" id="team"><!--main-section team-start-->
    <div class="container">
      <h2>Team DevSync</h2>

      <div class="team_section clearfix">
        <div class="team_area">
          <div class="team_box wow fadeInDown delay-03s">
            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/chardinal.png" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa fa-linkedin-square"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-envelope-o"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-instagram"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-github"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-03s">Chardinal Martin Butarbutar</h3>
          <span class="wow fadeInDown delay-03s">Development</span>
          <p class="wow fadeInDown delay-03s">Mahasiswa.</p>
        </div>
        <div class="team_area">
          <div class="team_box  wow fadeInDown delay-06s">
            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/Ryan.png" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa fa-linkedin-square"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-envelope-o"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-instagram"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-github"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-06s">Ryan Dwi Antoni</h3>
          <span class="wow fadeInDown delay-06s">Divisi Analisis dan Perencanaan</span>
          <p class="wow fadeInDown delay-06s">Mahasiswa.</p>
        </div>
        <div class="team_area">
          <div class="team_box wow fadeInDown delay-09s">
            <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
            <img src="img/gideon.png" alt="">
            <ul>
              <li><a href="javascript:void(0)" class="fa fa-linkedin-square"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-envelope-o"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-instagram"></a></li>
              <li><a href="javascript:void(0)" class="fa fa-github"></a></li>
            </ul>
          </div>
          <h3 class="wow fadeInDown delay-09s">Gideon Ary Andy</h3>
          <span class="wow fadeInDown delay-09s">UI/UX Design</span>
          <p class="wow fadeInDown delay-09s">Mahasiswa.</p>
        </div>
      </div>
    </div>
  </section>
  <!--/Team-->
  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">
          <h2>Contact Us</h2>
          <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 wow fadeInLeft">
            <div class="contact_info">
              <div class="detail">
                <h4>DevSync</h4>
                <p>Sistem Informasi, Fakultas Teknik, Univesitas Negeri Surabaya.</p>
              </div>
              <div class="detail">
                <h4>Call Us</h4>
                <p>081213141516</p>
              </div>
              <div class="detail">
                <h4>Email Us</h4>
                <p>devsync@gmail.com</p>
              </div>
            </div>



            <ul class="social_links">
              <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i
                    class="fa fa-linkedin-square"></i></a></li>
              <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i
                    class="fa fa-facebook-square"></i></a></li>
              <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i
                    class="fa fa-instagram"></i></a></li>
              <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i
                    class="fa fa-envelope-o"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-8 wow fadeInLeft delay-06s">
            <div class="form">
              <input class="input-text" type="text" name="" value="Your Name *"
                onFocus="if(this.value==this.defaultValue)this.value='';"
                onBlur="if(this.value=='')this.value=this.defaultValue;">
              <input class="input-text" type="text" name="" value="Your E-mail *"
                onFocus="if(this.value==this.defaultValue)this.value='';"
                onBlur="if(this.value=='')this.value=this.defaultValue;">
              <textarea class="input-text text-area" cols="0" rows="0"
                onFocus="if(this.value==this.defaultValue)this.value='';"
                onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
              <input class="input-btn" type="submit" value="send message">
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"><span>Copyright © 2045, </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.nav.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/wow.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>