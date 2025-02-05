<?php
include"database.php";

$login = true;

$destination = "SELECT * FROM destination ORDER BY id DESC";
$sql = $db->query($destination);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
<!-- <link rel="stylesheet" href="swiper-bundle.min.css"> -->

</head>
<body>
<!-- <div class="refresh-animation">
    <divk class="kiri"></divk>
    <divk class="kanan"></divk>
</div>  -->



    <header class="hide2 "><nav class="navbar-title">  
        <div class="logo">
            
            EXPRO Travel

        </div>
    
        <div class="List hide">

            <ul>
               <a href=""><li>Flights</li></a> 
             <a href=""><li>Hotels</li></a>   
            <a href=""> <li>Schedule</li> </a> 
               <a href=""> <li>Testimonials</li></a>
            </ul>
            <div >
                <a href="https://wa.me/6281234567890" target="_blank">
                    
                    <button  class="call-us"><i class="fa-solid fa-phone"></i>Call Us</button>
                </a>
                <button class="booking"><i class="fa-solid fa-suitcase-rolling"></i>My Booking</button>
            </div>
        </div>
        <div class="hamburger">

            <i class="fa-solid fa-bars"></i>
        </div>
</nav></header>
    
    <section id="hero">
     <div class="hero-isi">

         <div  data-aos="fade-down" data-aos-duration="5000" data-aos-delay="900" class="nav-title">
             <div class="logo">
                 
                 EXPRO Travel
     
             </div>
             <div class="List ">
     
                 <ul>
                    <a href=""><li>Flights</li></a> 
                  <a href=""><li>Hotels</li></a>   
                 <a href=""> <li>Schedule</li> </a> 
                    <a href=""> <li>Testimonials</li></a>
                 </ul>
             </div>
         <div >
    <a href="https://wa.me/6281234567890">

        <button  class="call-us"><i class="fa-solid fa-phone"></i>Call Us</button>
    </a>
           
     <button class="booking"><i class="fa-solid fa-suitcase-rolling"></i>My Booking</button>
         </div>
     </div>
         <div class="hero-content">
             <div data-aos="fade-right"  data-aos-duration="7000" data-aos-delay="600" class="isi">
 
                 <div class="achivmen"><i class="fa-solid fa-web-awesome"></i><h6>Telah Termasuk Ke Dalam 500 Top Travel Agency</h6></div>
                 
                     <h1>Membawa Anda Menjelajahi Dunia dengan <span>
                         Cara yang Berbeda
                     </span></h1>
     
                    
                    <button class="order">   PESAN SEKARANG <i class="fa-regular fa-paper-plane "></i></button>
      
             </div>
             
         
            
                 <img  data-aos="fade-up-left" data-aos-duration="7000" data-aos-delay="200" src="aset/Desain tanpa judul (1).png" alt="">
           
         </div>
     </div>
       
        <!-- <img  src="aset/brutal-young-man-sunglasses-hat-island-travel_1235831-295366.jpg" alt=""> -->
        
    </section>

<section id="about-us">
    <!-- <h1 class="about-title">Tentang Kami</h1> -->
    <div class="about-cotent">
        <div  class="about-img">
        
            <img   class="hot-air1 "  src="https://images.unsplash.com/photo-1531141445733-14c2eb7d4c1f?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <img  class="hot-air2 " src="https://i.pinimg.com/control2/736x/f9/4c/58/f94c5898fcc5227a6b969b303bf8a1b6.jpg" alt="">
            <img  class="hot-air3 "  src="https://img.freepik.com/premium-photo/man-sitting-waters-edge_153912-283803.jpg" alt="">
        
        </div>

    <div class="about-tesk">

        <h1>Siapa Sebenarnya EXPRO Travel, Apa tujuan kami ?</h1>
            <p>Kami adalah ExproTravel sebuah tim yang berdedikasi untuk membantu Anda menjelajahi dunia dengan cara yang lebih mudah, nyaman, dan berkesan. Dengan pengalaman bertahun-tahun di industri travel, kami telah membantu ribuan pelancong menemukan destinasi impian mereka, mulai dari wisata alam yang memukau hingga pengalaman budaya yang mendalam. </p>
            <p>Kami percaya bahwa setiap perjalanan adalah kesempatan untuk menciptakan kenangan baru, dan itulah mengapa kami memastikan setiap detail direncanakan dengan sempurna. Kami memahami bahwa setiap pelancong memiliki gaya dan preferensi berbeda. Dengan pendekatan personal, kami memberikan solusi perjalanan yang sesuai dengan keinginan Anda. Komitmen kami adalah memberikan layanan terbaik, mulai dari proses perencanaan hingga Anda kembali dengan senyuman puas
    
    <button class="footer-about">
        Pesan Tiket SEKARANG 
        <i class="fa-solid fa-arrow-right"></i>
        <!-- <img src="https://github.com/WebDesignMastery/Skywings_17-08-24/blob/main/assets/header-bg.jpg?raw=true" alt=""> -->
    </button>
            </div>
    </div>
</section>




 <section id="destination">
    
     <div class="destination-title">
         <h5>MENJELAJAHI TEMPAT</h5>
         <h1>Destinasi Populer</h1>
         <p>"Rasakan Pesona Destinasi Populer Kami - Tempat yang Selalu Membuat Anda Ingin Kembali!"</p>
        </div>
        <div class="swiper mySwiper hahaha22 ">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper slider">
              <!-- Slides -->
              <div class="swiper-slide hahaha bali ">
                <div class="overlay">
                    <div class="ratting">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="content-keterangan">
                        <span>INDONESIA</span>
                        <h1>BALI</h1>
                        <p>Surga wisata dengan pantai indah, pura megah, alam memukau,</p>
                    </div>
                </div>
            </div>
              <div class="swiper-slide hahaha bali2 ">
                <div class="overlay">
                    <div class="ratting">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="content-keterangan">
                        <span>JAPAN</span>
                        <h1>KYOTO</h1>
                        <p> Kota bersejarah yang terkenal. dan tradisi geisha di Gion.</p>
                    </div>
                </div>
            </div>
              <div class="swiper-slide hahaha bali3 ">
                <div class="overlay">
                    <div class="ratting">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="content-keterangan">
                        <span>FRANCE</span>
                        <h1>PARIS</h1>
                        <p> Kota dengan ikon dunia Menara Eiffel, dan seni di Museum Louvre.</p>
                    </div>
                </div>
            </div>
              <div class="swiper-slide hahaha bali4 ">
                <div class="overlay">
                    <div class="ratting">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="content-keterangan">
                        <span>UNI EMIRAT ARAB</span>
                        <h1>DUBAI</h1>
                        <p> destinasi paling ikonik di Dubai yang terkenal desainn layar kapal.</p>
                    </div>
                </div>
            </div>
              <div class="swiper-slide hahaha bali5 ">
                <div class="overlay">
                    <div class="ratting">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="content-keterangan">
                        <span>ENGGLAND</span>
                        <h1>LONDON</h1>
                        <p>wisata yang kaya akan sejarah, budaya, dan ikon global.  </p>
                    </div>
                </div>
            </div>
          
              <div class="swiper-slide hahaha bali6 ">
                <div class="overlay">
                    <div class="ratting">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="content-keterangan">
                        <span>CANADA</span>
                        <h1>TORONTO</h1>
                        <p>Kanada menawarkan berbagai pengalaman modern  multikultural,</p>
                    </div>
                </div>
            </div>
          
       
            </div>
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
<!-- 
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div> -->
            </div>
            <!-- <div class="button-destination"><button>Show More</button></div> -->
</section>

<section id="plan">
    <div class="plan-container">

        <div class="plan-img" >
            <img src="https://m.media-amazon.com/images/I/7171xfqZRzL._AC_UF1000,1000_QL80_.jpg" alt="">
        </div>
        <div class="plan-content">
            <div class="content-title">
                <h6><span>Mengapa Memilih Kami?</span></h6>
                <h1>Rencanakan Perjalanan Anda <span>Bersama Kami</span></h1>
            </div>
            <div class="content-plan">
                <ul>
                    <li>  <i class="ri-verified-badge-fill"></i><div class="list-content">
                        <h4>Jaminan Harga Terbaik</h4><p>Kami memastikan Anda memperoleh tarif paling kompetitif untuk rencana perjalanan Anda, membuat destinasi impian Anda terjangkau.</p>
                    </div></li>
                  <li><i class="ri-ship-2-fill"></i><div class="list-content">
                    <h4>Opsi Pemesanan</h4><p>Rasakan kemudahan pilihan pemesanan fleksibel yang disesuaikan dengan jadwal dan preferensi Anda.</p></div></li>
                  <li><i class="ri-road-map-fill"></i><div class="list-content">
                    <h4>Merevisi Peta Jalur</h4><p>Navigasi petualangan Anda dengan peta jalur pribadi kami yang dirancang untuk pengalaman perjalanan yang lancar dan menyenangkan.</p></div></li>
                </ul>
              
            </div>
        </div>
    </div>

</section>

<section id="book">
    <div class="book-container">
        <div class="book-title">
            <h6>E X P L O R E</h6>
            <h1>Explor Petualangan</h1>
        </div>
        <div class="katerogi">
            <div class="kategori-button">
                <button class="selected">Budget</button>
                <button>Standar</button>
                <button>Premium</button>
                <button>Luxury</button>
            </div>
            <div class="filter">
                <button >filter<i class="ri-equalizer-2-line"></i></button>
            </div>
        </div>
        <div class="book-content">
        <?php if(mysqli_num_rows($sql) > 0){
            while($r = mysqli_fetch_array($sql) ){
            ?>
            <div class="content-book">
                <div class="book-rating">  <i class="fa-solid fa-star"></i> <span>5,0</span></div>
                <i class="ri-heart-line"></i>  
                <!-- <div class="book-icon">
                    <i class="ri-heart-line"></i>  
                </div> -->
                <img src="<?=$r['img'] ?>" alt="">
               <div class="booking-content">
                <div class="lokasi">
                    <h2><?=$r['destination_name'] ?></h2>
                    <div class="location">
                        <!-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla porro reprehenderit ipsam, consectetur reiciendis doloremque impedi.</p> -->
                        <i class="ri-map-pin-2-fill"></i><p><?=$r['location'] ?>a</p>
                    </div>
                    
                </div>
                <div class="price">

                    <h2>$<?=$r['price'] ?><span>/per person</span></h2>
                  <button onclick="window.location.href='booking.php?id=<?=$r['id']?>'" >Book Now</button>
                </div>
               </div>
            </div>
<?php }} ?>
         
        </div>
    </div>
</section>

<section id="testimonial">
    <div class="testimonial-container">
        <div class="testimonial-title">
        <h6><span>Apa Kata Klien Kami?</span></h6>
        <h1>Testimoni <span>Klien</span></h1>
        </div>
        <div class="tetimonial-card">
         
        <div class="swiper mySwiper2 ">
    <div class="swiper-wrapper hahaha23">
      <div class="swiper-slide testimoni">
      <div class="person ">
            <img src="aset/Simons Celebrates Summer + Father's Day with John Halls – The Fashionisto.jpg" />
        </div>
          <div class="testimonial-content">
              <h1>Siti Amelia</h1>
              <h4>Mahasiswi</h4>
              <p>"Paket wisata yang ditawarkan sangat terjangkau dan lengkap. Saya sangat menikmati perjalanan ke Cappadocia, terutama balon udara panasnya. Semua terorganisasi dengan baik, tanpa kendala berarti."</p>
          </div>
         

      </div>
      <div class="swiper-slide testimoni">
          <div class="person">
              <img src="aset/Simons Celebrates Summer + Father's Day with John Halls – The Fashionisto.jpg" />
            </div>
            <div class="testimonial-content">
                    <h1>Budi Santoso</h1>
                    <h4>Pegawai Negeri Sipil</h4>
                    <p>"Machu Picchu benar-benar indah dan penuh sejarah. Terima kasih kepada travel agency ini yang membuat perjalanan saya nyaman dan tak terlupakan. Pelayanannya ramah dan cepat tanggap!"</p>
                </div>
      </div>
      <div class="swiper-slide testimoni">
          <div class="person">
              <img src="https://i.pinimg.com/736x/e4/1e/5b/e41e5bcc3a0efc4478644d3961653cd2.jpg" />
          </div>
      <div class="testimonial-content">
              <h1>Emily Carter</h1>
              <h4>Travel Blogger</h4>
              <p>"Layanan travel ini benar-benar luar biasa! Saya sangat puas dengan rekomendasi destinasi dan panduan yang disediakan. Liburan saya di Santorini menjadi momen tak terlupakan. Terima kasih atas pelayanannya yang sangat profesional!"</p>
          </div>
      </div>
 
    </div>
   
    <!-- <div class="swiper-pagination"></div> -->
  </div>
  <div class="button-next">

<div class="custom-button-prev"><i class="ri-arrow-left-line"></i></div>
<div class="custom-button-next"><i class="ri-arrow-right-line"></i></div>
</div>
        </div>
    </div>
</section>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>

<script src="index.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3, 
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    autoplay: true,
    loop: true,
    navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
},
  });
  var swiper = new Swiper(".mySwiper2", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".custom-button-next",
        prevEl: ".custom-button-prev",
      },
    
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>
</body>
</html>