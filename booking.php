<?php
include"database.php";

$id = $_GET['id'];
$sql = "SELECT * FROM destination WHERE id='$id'";
$sql_run = $db->query($sql);
$foo = mysqli_fetch_object($sql_run);
$tanggal = date('Y/m/d');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

  <!-- Link tailwind CSS -->
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
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
    rel="stylesheet"/>
    <script src="booking.js" defer></script>
</head>
<style>
    *{
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    font-family: 'Poppins';
    scroll-behavior: smooth;
}

:root {
    --primay-color:#2887ff;
    --primay-color-dark:#2476da;
    --text-dark:#0a0a0a;
    --text-light:#737373;
    --extra-light:#f3f4f6;
    --white:#ffffff;
    --max-width: 1200px;
    --green-color:#223544;
}

* a {
    text-decoration: none;
    cursor: pointer;
    color: #000000;
}
* li {
    cursor: pointer;
    list-style: none;
}
* ul {
    cursor: pointer;

}
* span {
    color: var(--primay-color);
}

body{
 
        overflow-x: hidden;
    

}

header {

        width: 100%;
z-index: 1;
}
/* .hide2 {
   position: relative;
   animation:0.7s ease hide ;
}
.show {
    position: fixed;
    animation: 0.7s ease show;
    opacity: 1;
}
@keyframes show {
    from {
        opacity:0 ;
        top: -10%;
    }
    to {
 opacity: 1;
 top: 0%;
    }
}
@keyframes hide {
    from {
        opacity: 1;
        top: 0%;
    }
    to {
        opacity:0 ;
        top: -10%;

    }
} */
nav {
    box-shadow: 1px 1px 4px black;
    padding: 30px 100px;
    display: flex;
   width: 100%;
    align-items: center;
    background: white;

}
nav ul li {
    color: #000000;
    margin: 0px 40px;
}
nav button {
    width: fit-content;
    font-size: 14px;
     border-radius: 50px;
     border: 1px solid black;
     padding: 14px 15px;
}
nav button i {
    margin-right: 20px;
}
.hamburger{
    font-size: 25px;
    display: none;
}
nav .List {
    display: flex;
    align-items: center;
 width: 100%;
   justify-content: space-between;
}
nav .logo {
    align-items: center;
    display: flex;
    font-weight: 800;
    width: 30%;
}
nav ul {
    display: flex;
}
.nav-title button {
    width: fit-content;
   font-size: 14px;
    border-radius: 50px;
    border: 1px solid black;
    padding: 14px 15px;
}
.nav-title button i {
    margin-right: 20px;
}
.call-us {
    background: none;
}

.booking{
    
    margin-left: 10px;
    background-color: black;
    color: white;
}
/* #booking {
    min-height: 60vw;
    background: url('https://waspada.co.id/wp-content/uploads/2024/02/travel5-360x180.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
} */
#hero {
    min-height: 100vh;
    align-content: center;

}
.pembungkus {

    max-width: var(--max-width);
    margin: auto;
}
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.img-container {

   display: flex;

 justify-content: space-between;
}
.img-container img {
    border-radius: 10px;
    width: 400px;
}
.deskripsi {
    width: fit-content;
}

.deskripsi button {
    font-weight: 500;
    border: none;
   background: none;
   font-size: 15px;
 
    margin-right: 20px;
  margin-top: 15px ;
  padding: 1px;
  padding-bottom: 10px;
 transition: .3s ease;
 cursor: pointer;
}


.deskripsi button:hover {

    color: var(--primay-color);
}
.deskripsi .active {
    color: var(--primay-color);
    border-bottom: 2px solid var(--primay-color);
}
.image-slide {
   /* margin-left: 20px; */
}
.detail {
    width: 30%;
    height: fit-content;
    border-radius: 10px;
    padding: 20px;
    align-content: center;
box-shadow: 1px 1px 10px rgb(204, 202, 202) ;
}

.detail h4 {
    font-weight: 500;
}
.detail h1 {
    font-size: 30px;
    font-weight: 600;
    color: var(--primay-color);
}
.detail h1 span {
    font-size: 12px;
}
.deskripcion {
    margin-top: 20px;
    width: 820px;
    text-align: justify;
}
.title {
    margin: 30px 0px;
    font-size: 30px;
}
.title h1 {
    font-weight: 400;
}
.title h6 {
    font-weight: 300;
    font-size: 15px;
}
.title h6 span {
    margin-right: 10px;
}
.detail-icon{
    border-radius: 10px;
    color: var(--primay-color-dark);
    display: flex;
    padding: 10px ;
    justify-content: space-evenly;
    margin: 20px 0px;
    box-shadow: 0px 0px 1px var(--primay-color);
    text-align: center;
    font-weight: 300;
}
.detail-icon i {
    font-size: 30px;
}
.detail-icon h6 {
    color: #000000;
}


.detail form .flex{
    margin: 15px 0px;
    display: flex;
    justify-content: space-between;
    
}
.detail form .input input {
    padding: 10px;
    width: 100%;
    border: 1px solid gray;
    border-radius: 10px;
    outline: none;
}
.detail form  button {
    color: var(--extra-light);
    background-color: var(--primay-color);
   align-items: center;
  margin: 20px 0px;
    padding: 10px 25px;
    border-radius: 10px;
    border: none;
    width: 100%;
}
.total {

}
.total input {
    width: 100%;
    margin-top: 10px 0px;
  
    text-align: center;
    border: none;
}
@media(max-width:1205px){
    .pembungkus{
        padding: 15px;
    }
    .container {
        margin:0%;
        justify-content: left;
    }
    .detail {
        margin-top: 30px;
        width: 80%;
    }
}
@media(max-width:692px){

    nav  {
        padding: 30px;
        justify-content: space-between;
    }
 nav .List {
    min-height: 109vh;
 top: 0;
   bottom: 0%;
    font-weight: 500;
left: 0;
   display: block;
   background: white;
   position: absolute;
   width: 300px;
   padding-right: 45px;
z-index: 999;
   box-shadow: 1px 12px 10px black;
   transition: .3s ease;
}
.hide {
    transform: translateX(-120%);

}
.active {
    transform: translateX(0%);
}
nav ul {
    display: inline;
}
nav .List div button {
    flex-wrap: wrap;
    border: none;
    color: var(--text-dark);
   background: none;
}
nav .List div {
    margin-top: 30px;
}
nav ul li {
    margin-top: 40px;
}

.booking {
    margin-left: 0;
}

.hamburger{
   cursor: pointer;
    display: inline;
}
.img-container img {
  
    width: 150px;
}
.deskripcion {
 font-size: 10px;
    width: 330px;
  
}
 .detail {
 font-size: 10px;
 width: 100%;
}
.detail form {

}
}
</style>
<body>
<header ><nav class="navbar-title">  
        <div class="logo">
            <a href="index.php">

                EXPRO Travel
            </a>

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


<!-- <section id="booking"></section> -->

<section id="hero">
    <div class="pembungkus">
    <div class="title">

        <h1 ><?=$foo->destination_name ?></h1>
       <h6><span><i class="ri-map-pin-2-fill"></i></span><?=$foo->location ?></h6>
    </div>
       
        <div class="container">
            <div class="deskripsi">
                <div class="img-container">
                    <img src="<?=$foo->img2?>" alt="">
                
                    <div class="image-slide">
                        <img src="<?=$foo->img3?>" alt="">
                        
                        <div>
                            <img src="<?=$foo->img4?>" alt="">
    
                        </div>
                    </div>
                </div>  
                <div>
                <button class="active">Deskripsi</button>
           <button>Galeri</button>
           <button>Rating</button>
                </div>  
         <div class="deskripcion">
            <p><?=$foo->deskripsi?></p>
         </div>
            </div>
        <div class="detail">
        <div>
            <h4>Mulai Dari</h4>
            <h1>$<?=$foo->price ?><span>/person</span></h1>
            <hr>
    <div class="detail-icon">
       <div><i class="ri-time-line"></i><h6>5 Hari</h6></div>
       <div><i class="ri-calendar-event-line"></i></i><h6><?=$tanggal ?></h6></div>
       <div><i class="ri-store-3-line"></i><h6>50 tersedia</h6></div>
    </div>
    <form action="" method="post">
        <label for="" class="input">

            <label for="" class="flex">
    
                <label for="keberangkatan"><p>Depature</p><input required type="date" name="keberangkatan"></label>
                <label for="balik"><p>Return Time</p><input required type="date" min="<?=$tanggal ?>" name="balik" ></label><br>
            </label>
            <label for="penumpang"><p>Seat</p><input required type="number" min="1" name="penumpang" id="passenger"></label>
        </label>
        <label for="" class="total"><input placeholder="total" type="text" name="total" readonly id="total"></label>
    
    <button type="submit">Book Now</button>
    
    </form>
        </div>
        </div>
        </div>
    </div>
</section>




<script>
const o = document.getElementById("passenger")
const p = document.getElementById("total")
const y = <?=$foo->price?>

o.addEventListener("input", () => {
  const i = o.value
  
  const hahaha = i * y
  
 p.value = ` $ ${hahaha}`

})
// const navBar = document.querySelector(".navbar")


// window.addEventListener("scroll", () => {
//     console.log(window.scrollY)
//     if(window.scrollY >= 164){
//       navBar.classList.remove("hide2")
//       navBar.classList.remove("hide2")
//     }
// })
</script>
</body>

</html>
