<body>
<!-- ======= Header ======= -->
  <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.html" class="scrollto">NARMADA PARK</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Profil</a></li>
          <li><a href="#features">Informasi</a></li>
          <li><a href="<?php echo base_url('user/Tiket_user') ?>">Tiket</a></li>
          <li><a href="<?php echo base_url('user/Pengunjung_user') ?>">Pesan Tiket</a></li>
          <li><a href="#gallery">Galeri</a></li>
          <li><a href="#contact">Hubungi kami</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">

    <div class="intro-text">
      <h2>Welcome to Narmada Park </h2>
      <a href="#about" class="btn-get-started scrollto">Jelahi</a>
    </div>

  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Taman Narmada, Lokasi Air Awet Muda Dari Zaman Kerajaan</h3>
          <span class="section-divider"></span>
          <p class="section-description">
           Taman Narmada merupakan taman air peninggalan kerajaan, yang dikenal sebagai kolam pemandian raja. Objek wisata ini merupakan wisata spesial yang terlihat berbeda, diantara obyek liburan yang ada di pulau Lombok, yang umumnya berhubungan dengan pantai dan laut.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="<?=base_url('assets/')?>assets/img/taman.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Sejarah Taman Narmada</h2>
            <p>
              Taman Narmada di bangun oleh Raja Anak Agung Ngurah Karangasem pada tahun 1727 masehi. Nama taman ini diambil dari sebuah sungai suci di india, yaitu sungai Narmanadi. Taman ini dimaksudkan sebagai miniatur Gunung Rinjani dan Danau Segara Anak.
            </p>
            <p>
              Konon, ketika Sang Raja sudah terlalu tua untuk melakukan ritual kurban ( pekelem ) ke puncak Gunung Rinjani, beliau memerintahkan arsitek kerajaan untuk membawa nuansa Gunung Rinjani ke tengah pusat kota. Maka terwujudlah taman Narmada sebagai miniatur Gunung Rinjani.
            </p>
            <p>
              Perayaan ini dilakukan pada bulan purnama kelima dalam kalender Bali. Kalender yang dipakai kalender bali, karena jara lombok, merupakan raja bawahan dari raja karangasem di bali. Kerajaan karangasem menganeksasi lombok pada tahun 1614.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Featuress Section ======= -->
    <section id="features">
      <div class="container">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Tips Mengunjungi Taman Narmada</h3>
              <p>Jika ingin berkunjung, ada beberapa tips ini perlu kamu perhatikan, diantaranya:</p>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="far fa-address-card"></i></div>
                <h4 class="title"><a href="">Berpakaian Yang Sopan</a></h4>
                <p class="description">Jika berkunjung ke area pura, pengunjung akan diberikan kain untuk menutupi pinggang ke bawah sampai di bawah lutut. Untuk memastikan bahwa para pengunjung sudah menggunakan pakaian yang sopan, pihak petugas pintu masuk juga menyediakan selendang dan kain untuk para pengunjung yang datang.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">Wanita Haid Jangan Memasuki Area Pura</a></h4>
                <p class="description">Sebagai tempat yang dikategorikan suci oleh masyarakat Lombok, salah satu peraturan yang ada di Taman Narmada Lombok adalah wanita yang tengah datang bulan tidak boleh memasuki area Pura yang ada di Taman ini.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Menggunakan Alas Kaki Nyaman</a></h4>
                <p class="description">Pengunjung sebaiknya menggunakan alas kaki yang nyaman dan aman. Hal ini dikarenakan ketika berwisata di tempat ini sebaiknya berjalan kaki sambil menikmati asri dan keindahan taman.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Menjaga Anak-Anak</a></h4>
                <p class="description">Bagi pengunjung yang datang berkunjung bersama anak-anak diharapkan selalu menjaga anak itu. Karena di Taman Narmada memiliki banyak kolam yang cukup dalam. Sehingga dikhawatirkan anak-anak bisa saja jatuh ke dalamnya.</p>
              </div>
               <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Siapkan Kamera</a></h4>
                <p class="description">Tentu liburan akan kurang lengkap jika tidak mengambil gambar sebagai kenang-kenangan. Jangan lupa untuk membawa kamera dari rumah. Di sana pengunjung bisa berfoto dengan background yang indah.</p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Featuress Section -->

    <!-- ======= Advanced Featuress Section ======= -->
    <section id="advanced-features">

      <div class="features-row section-bg">
        <div class="container">
          <div class="section-header">
          <h2 class="section-title">Aktivitas Menarik di Taman Narmada</h2>
          <span class="section-divider"></span>
          <p class="section-description">
           Beragam aktivitas yang dapat dilakukan ketika sedang berkunjung ke Taman Narmada ini. Beberapa diantaranya seperti berikut:
          </p>
        </div>
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="<?=base_url('assets/')?>assets/img/awg.jpg" alt="">
              <div class="wow fadeInLeft">
                <h2>Mencoba Air Awet Muda</h2>
                <p>Taman Narmada tidak hanya memiliki pura saja, layaknya taman pada umumnya di Taman ini juga dapat kita jumpai beberapa kolam air. Oleh masyarakat sekitar dipercaya dapat membuat orang yang mandi atau membasuh muka dengan air di kolam tersebut menjadi awet muda.
                </p>
                <p>Kolam air suci itu bernama Bale Petirtaan yang mata airnya berasal dari Gunung Rinjani. Dipercaya kalau kolam itu menjadi tempat pertemuan tiga sumber air yaitu Narmada, Lingsar dan Suranadi.
                </p>
                <p>Untuk masuk ke dalam, pengunjung diharuskan memakai selendang warna kuning. Konon, dengan meminum air dari Bale Petirtaan ini dipercaya bisa membuat awet muda. Karena itulah, Taman Narmada terkenal dengan sebutan Taman Air Awet Muda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="<?=base_url('assets/')?>assets/img/unnamed.jpg" alt="">
              <div class="wow fadeInRight">
                <h2>Berkunjung Ke Pura Kelasa</h2>
                <p>
                  Sebagai puncak tertinggi dari Taman Narmada dibangun sebuah pura yaitu Pura Kelasa dengan bentuk bangunan menyerupai punden berundak dan merupakan salah satu pura tertua di Lombok. Di desain menyerupai kondisi dari gunung Rinjani, maka untuk menuju pura Kelasa anda harus melewati puluhan anak tangga.
                </p>
                <p>
                  Nama Pura Kelasa berasal dari nama sebuah gunung suci dalam mitologi hindu, Gunung Kailas. Pura Kelasa didirikan di sekitar mata air, berkiblat ke arah puncak Gunung Rinjani dengan danau Segara Anakan-nya. Pura Kelasa ini memiliki tiga mandala, tapi terdiri dari lima tingkat halaman.
                </p>
                <p>
                  Utama mandala halaman teratas, merupakan Bagian inti pura. Madya mandala, halaman kedua sebagai jaba tengahnya. Kanista mandala, halaman ketiga, keempat dan kelima, sebagai jaba sisi-nya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="<?=base_url('assets/')?>assets/img/yty.jpg" alt="">
              <div class="wow fadeInLeft">
                <h2>Mengunjungi Balai Loji, Balai Teran, Telaga Padmawangi</h2>
                <p>
                  Kompleks Taman Narmada yang ada di Lombok itu dapat dibagi menjadi beberapa bagian, yaitu gerbang utama, jabalkap, telaga kembar, gapura gelang/paduraksa, mukedes, telaga padmawangi, balai loji, balai terang, patandaan, bangunan sekepat, balai bancingah, Pura Kelasa dan Pura Lingsar.
                </p>
                <p>
                  Gerbang utama yang berbentuk gapura bentar dan berada di sebelah utara. Setelah gerbang utama kita akan memasuki halaman jabalkap, yang di dalamnya terdapat telaga kembar. Di bagian selatan jabalkap terdapat sebuah gapura yang bernama Gapura Gelang atau Paduraksa yang menghubungkan antara halaman jabalkap dengan halaman mukedes.
                </p>
                <p>
                  Pada halaman mukedes terdapat beberapa buah bangunan, antara lain Sanggah Pura, Balai Pamerajan dan Balai Loji. Balai loji merupakan salah satu di antara bangunan kediaman raja. Di sebelah tenggara halaman mukedes terdapat gapura yang menuju ke halaman pasarean.
                </p>
                <p>
                  Di halaman paseran ini terdapat Balai Terang. Balai Terang adalah sebuah bangunan yang berfungsi sebagai tempat istirahat raja. berbentuk panggung yang seluruhnya terbuat dari kayu. Bagian atas bangunan yang terbuka dipergunakan untuk menikmati pemandangan ke arah Meru pura di sebelah timur. Pintu dan jendela Balai Terang ini bermotif bulan tunggal dan tumbuh-tumbuhan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="<?=base_url('assets/')?>assets/img/fly.jpg" alt="">
              <div class="wow fadeInRight">
                <h2>Mengikuti Aktivitas Outbound Seperti Flying Fox</h2>
                <p>
                  Dengan areal yang cukup luas, pengelola Taman mengembangkan area outbound yang dapat dinikmati pengunjung yang suka dengan permainan menantang. Bukan hanya duduk bersantai menghabiskan waktu.
                </p>
                <p>
                  Ada beberapa jenis permainan outbound yang bisa dicoba antara lain flying fox. Meskipun tidak terlalu tinggi dan ekstrem, permainan outbound di Taman Narmada cukup menguji adrenalin.
                </p>
                <p>
                  Jika tertarik dan ingin memahami lebih lanjut tentang sejarah Taman ini, tidak ada salahnya mampir sejenak ke museum yang terletak satu area dengan lokasi outbound ini.
                  Meskipun tidak terlalu luas, informasi yang diberikan di dalam museum cukup memberikan gambaran tentang sejarah Taman Narmada di pulau Lombok.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Advanced Featuress Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Pesan Tiketmu Sekarang Juga</h3>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?php echo base_url('user/Pengunjung_user') ?>">Pesan Tiket</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= More Features Section ======= -->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Dokumentasi Kunjungan Wisatawan Ke Narmada Park</h3>
          <span class="section-divider"></span>
        </div>

        <div class="row">

          <div class="col-12">
            <div class="box wow fadeInLeft">
             <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul </th>
                  <th>Gambar</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                </tr>
              </thead>
              <!-- <tbody>
                <?php $no=1; foreach ($Informasi as $Informasi){ ?>
                  <tr>

                    <td><?php echo $judul->judul ?></td>
                    <td><?php echo $gambar->gambar ?></td>
                    <td><?php echo $ket->ket ?></td>
                    <td><?php echo $tanggal->tanggal ?></td>
                  </tr>
                  <?php $no++; } ?>
                </tbody> -->
              </table>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End More Features Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients">
      <div class="container">

        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Informasi Paket & Tiket Narmada Park</h3>
          <p class="section-description">Paket yang tersedia pada Narmada Park</p>
          <span class="section-divider"></span>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box wow fadeInLeft">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> month</span></h4>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
                <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
                <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
                <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
                <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box featured wow fadeInUp">
              <h3>Business</h3>
              <h4><sup>$</sup>29<span> month</span></h4>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
                <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
                <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
                <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
                <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="box wow fadeInRight">
              <h3>Developer</h3>
              <h4><sup>$</sup>49<span> month</span></h4>
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Quam adipiscing vitae proin</li>
                <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
                <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
                <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
                <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="get-started-btn">Get Started</a>
            </div>
          </div>

        </div>
      </div>
    </section>
     --><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Tiket</h3>
          <span class="section-divider"></span>
          <p class="section-description">Tiket terpisah yang tersedia pada Narmada Park</p>
        </div>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section>
     --><!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
   <!--  <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Formulir Pendaftaran</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Galeri Taman Narmada</h3>
          <span class="section-divider"></span>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="assets/img/gallery/gallery-1.jpg" data-gall="portfolioGallery" class="venobox">
                <img src="<?=base_url('assets/')?>assets/img/gallery/gambar1.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="assets/img/gallery/gallery-2.jpg" data-gall="portfolioGallery" class="venobox">
                <img src="<?=base_url('assets/')?>assets/img/gallery/gambar2.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="assets/img/gallery/gallery-3.jpg" data-gall="portfolioGallery" class="venobox">
                <img src="<?=base_url('assets/')?>assets/img/gallery/gambar3.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="assets/img/gallery/gallery-4.jpg" data-gall="portfolioGallery" class="venobox">
                <img src="<?=base_url('assets/')?>assets/img/gallery/gambar4.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="assets/img/gallery/gallery-5.jpg" data-gall="portfolioGallery" class="venobox">
                <img src="<?=base_url('assets/')?>assets/img/gallery/gambar5.jpg" alt="">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="assets/img/gallery/gallery-6.jpg" data-gall="portfolioGallery" class="venobox">
                <img src="<?=base_url('assets/')?>assets/img/gallery/gambar6.jpg" alt="">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Narmada Park</h3>
              <!-- <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p> -->
              <div class="social-links">
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Jl. Raya Mataram - Labuhan Lombok, Lembuak, Narmada, Kabupaten Lombok Barat, Nusa Tenggara Barat. 83371</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>narmadapark@gmail.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+62 823-4056-4761</p>
              </div>

            </div>
          </div>
         
         <div class="col-lg-4 col-md-4">
            <div class="textwidget">
              <h3>JAM OPERASIONAL</h3>
              <p>Kami buka setiap hari sepanjang tahun.<br/> Ini jam operasional kami:<br /></p>
                  <strong>Jam Buka:</strong> 09.00 am<br />
                  <strong>Jam Tutup:</strong> 04.00 pm<br />
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->