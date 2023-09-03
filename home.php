<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/commun.php" ?>
     <style>
        body{margin: 0;}
    </style>
</head>
<body>
    <div class="pallet">
        <div class="col" style="flex:45%;background: var(--45);"></div>
        <div class="col" style="flex:25%;background: var(--25);"></div>
        <div class="col" style="flex:15%;background: var(--15-0);"></div>
        <div class="col" style="flex:15%;background: var(--15-1);"></div>
    </div>
    <?php include "php/header.php" ?>
    <section class="slideshow">
        <div class="slideshow-container">

            <div class="mySlides fade">
              <img src="Media/slide(1).jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="Media/slide(2).jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <img src="Media/slide(3).jpg" style="width:100%">
            </div>
            
            </div>
        <div style="text-align:center" class="dot-tags">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </section>

    <section class="location">
        <h1>A STUDENT UNION FOR ADULTS</h1>
        <p>Founded in 1989 by six-time James Beard Foundation semifinalist Martha Hoover, Cafe Patachou is an award-winning restaurant offering a world class breakfast and lunch experience. </p>
        <p class="sum">All locations open daily         </p>
        <a href="location.php" class="order">OUR LOCATIONS</a>
    </section>
    <section class="menu">
        <article style="background:fixed url(./Media/wallpaper.jpg) ;">
            <div class="frame" style="border-image: url(./Media/frame.jpg) 44 / 13px / 0px stretch;">
                <h1>OUR MENU</h1>
                <p>At Café Patachou®️, customers can expect dishes prepared with premium ingredients from scratch and to-order, with service that is refreshingly personal, yet professional in environments that are vibrant and convivial.</p>
                <div class="btns">
                    <a href="" class="order">Order Online</a>
                    <a href="" class="order">View Menu</a>
                </div>
            </div>
        </article>
        <aside>
            <img src="Media/slide(1).jpg" alt="">
        </aside>
    </section>
    <section class="menu menu-1">
        <aside >
        <img src="./Media/american-heritage-chocolate-vdx5hPQhXFk-unsplash.jpg" alt=""> </aside>
        <aside >
            <img src="./Media/deva-williamson-S2jw81lfrG0-unsplash.jpg" alt="">
        </aside>
    </section>
    <section class="menu menu-2">
        <aside><img src="./Media/joseph-gonzalez-fdlZBWIP0aM-unsplash.jpg" alt=""></aside>
        <article style="background:fixed url(./Media/wallpaper.jpg) ;">
            <div class="frame" style="border-image: url(./Media/frame.jpg) 44 / 13px / 0px stretch;">
                <h1>WE CATER                </h1>
                <p>Café Patachou®️ would love to cater your party, business meeting or corporate event!</p>
                <div class="btns">
                    <a href="" class="order">INQUIRE NOW</a>
                </div>
            </div>
        </article>
    </section>

    <section class="location" style="background-color: var(--25);color: white;">
        <h1>MERCH & GIFT CARDS        </h1>
        <p>Find the perfect gift for yourself or a loved one    </p>
        <a href="shopnow.php" class="order" style="background-color: white;color:var(--25)">SHOP NOW</a>
    </section>
    <section class="view-bottom center-content" style="background:url(https://media.istockphoto.com/id/1356265233/vector/hexagonal-honeycomb-bee-background-pattern-vector-abstract-honeycomb-bee-hive.jpg?s=612x612&w=0&k=20&c=cYWkEVB7GJRHLFGjKn-Jj1pYjiik1D9GS9TQW8x-xpM=) fixed;"> 
        <img src="./Media/925Logo.png" alt="">
    </section>
    <?php include "php/footer.php"?>

    <script src="Js/slideshow.js"></script>
    <script src="Js/sticky.js"></script>
</body>
</html>
