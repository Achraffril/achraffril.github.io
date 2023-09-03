<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/commun.php"?>
    <link rel="stylesheet" href="http://localhost/cafepatachou.com/theme/menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Nanum+Myeongjo&family=Pacifico&family=Quicksand&display=swap" rel="stylesheet">
<style>
    header{top: 0;position: relative;}
</style>
</head>
<body>
    <?php include "php/header.php"?>
    <section class="food-type">
        
    <a href="#boissons-chaudes"><img src="./Media/icon/001-smoothie.png" alt="Boissons froides"><span>Boissons froides</span>      <span></span><a>

    <a href="#boissons-froides"><img src="./Media/icon/platter.png" alt="Boissons chaudes"><span>Boissons chaudes</span>      <span></span><a>

    <a href="#recettes-sucrées"><img src="./Media/icon/pudding.png" alt="Recettes Sucrées"><span>Recettes Sucrées</span>      <span></span><a>

    <a href="#recettes-salées"><img src="./Media/icon/bread.png" alt="Recettes Salées"><span>Recettes Salées</span>       <span></span><a>
    </section>
    <section class="menu-pages" style="background:url(./Media/wallpaper2.jpg); margin-top: calc(111.98px + 2em);">
        <div class="menu-frame" >
            <article class="boissons-chaudes">
                <fieldset>
                    <legend id="boissons-chaudes" >boissons chaudes</legend>
                    <ul class="row">
                        <div class="col">
                            <div class="item">
                                <span>Thés & Infusions</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Café Latte de l’Ours</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Moka</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Café Latte</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Lungo</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Con Panna</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Macchiato</span><span class="price"> 20 DH</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="item">
                                <span>Espresso</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Chocolat Viennois</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Chocolat</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Cappuccino</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Chocolat Blanc</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Chaï Latte</span><span class="price"> 20 DH</span>
                            </div>
                            <div class="item">
                                <span>Café Filtre</span><span class="price"> 20 DH</span>
                            </div>
                        </div>
                    </ul>

            </fieldset>
            
        </article>
        
        <article class="boissons-froides">
                <fieldset>
                    <legend id="boissons-froides">boissons Froides</legend>
                    <ul class="row">
                        <div class="col">
                       
                            <div class="item froide-item"><span>Smoothie Rouge</span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Smoothie Jaune Exotique </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Édivxir </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Petits Jus </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Orange pressée </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Chaï Latte Frappé </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Cold Brew Latte </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Thé Glacé Framboise & Fleur de sureau </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Thé Glacé Pêche </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Thé Glacé Passion & Agrumes aux épices </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Chocolat Frappé </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Café Frappé </span> <span class="price">10 DH</span></div>
                            <div class="item froide-item"><span>Milkshake </span> <span class="price">10 DH</span></div>
                        
                            
                        </div>
                    </ul>

            </fieldset>
            
        </article>
        <article class="recettes-sucrées">
                <fieldset>
                    <legend id="recettes-sucrées">Recettes Sucrées</legend>
                    <div class="row">
                        <div class="col">
                       
                            <div class="item recettes-sucr-item"><span>Cakes</span>     <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Pancakes</span>      <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Party Cake</span>        <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Brookie</span>       <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Red Velvet</span>        <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Gâteau gourmand aux pommes</span>        <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Gâteau au chocolat</span>        <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Cheesecake</span>        <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Carrot cake</span>       <span class="price">30 DH</span></div>                                   
                            
                        </div>
                        <div class="col">
                        <div class="item recettes-sucr-item"><span>Salade de fruits</span>      <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Fromages blancs gourmands</span>     <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Les Carrés Columbus</span>       <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Donuts</span>        <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Pain perdu</span>        <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Cinnamon Roll</span>     <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Viennoseries</span>      <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Cookie Coeur</span>      <span class="price">30 DH</span></div>
                            <div class="item recettes-sucr-item"><span>Cookies</span>       <span class="price">30 DH</span></div>
                        </div>
                    </div>

            </fieldset>
            <div style="text-align:center" class="dot-tags">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        </article>
        
    </div>
    </section>


    <script>
        window.addEventListener("scroll", function() {
  var foodTypeSection = document.querySelector(".food-type");
  var scrollY = window.scrollY;

  if (scrollY > 300) {
    foodTypeSection.classList.add("sticky");
  } 
  else {
    foodTypeSection.classList.remove("sticky");
  }
});

    </script>
    <?php include "php/footer.php"?>
</body>
</html>