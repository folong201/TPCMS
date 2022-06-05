<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mairie Yde IV</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/b2.jpeg" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php">Accueil</a>
        <a href="projets.php">Projets</a>
        <a href="activites.php">Activites</a>
        <a href="annonces.php">Annonces</a>
        <a href="lieux.php">Lieux touristiques</a>
        <a href="pub.php">Pub</a>
    </nav>
<!-- 
    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div> -->
    <!-- <div class="relate">
        .
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">$15.99/-</div>
            </div>
        </div>
        <a href="#" class="btn">checkout now</a>
    </div> -->

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Annonces de la Mairie de Yaounde IV</h3>
        <p>La Commune d'Arrondissement de Yaounde IV est située dans la Région du Centre, précisément au sud de la ville de Yaoundé et est implantée sur une superficie estimée environ à 5000 m2. Elle couvre en termes d’unité de commandement une superficie estimée à 57 km2.</p>
        <a href="#" class="btn">Lire Plus</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> Differentes <span>Activites dans </span> l'arrondissement de Yaounde IV </h1>

    <div class="row">

        <div class="image">
            <img src="images/b4.jpg" alt="">
        </div>

        <div class="content">
            <h3>Decrets de la mairie</h3>
            <p>Retrouver tous les services et activités disponibles dans la commune de yaounde IV pour votre bien être et votre épanouissement.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus nemo illo sequi et nostrum perspiciatis fuga rem mollitia molestiae? Fugiat velit quo dignissimos deserunt sequi quasi labore quis vero placeat.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab obcaecati corporis rem iure distinctio sequi temporibus, aliquid facilis numquam ipsa vitae, in incidunt odio molestiae qui deserunt commodi dolores debitis.
            </p>
            <a href="#" class="btn">voir plus</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->



<!-- menu section ends -->



<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> Annonces de  <span>Mariage</span> </h1>

    <div class="box-container">
    <?php
                $database = new PDO('mysql:host=localhost;dbname=CMS','root','');
                $sql = "SELECT * FROM annonce";
                $reponce = $database->query($sql);
                while($data = $reponce->fetch()){
                    
     ?>
                    
                    
            <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>
            <?php echo$data['description']; ?>
           </p>
           <img src="../admin/upload/<?php echo$data['photo']; ?>" alt="" style="max-width: 200px;max-heigth: 200px;"> 
            <h3><?php echo$data['name']; ?></h3>
        </div>
                    
                    
        <?php
                    
                }
        ?>


        <!-- <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/b3.jpeg" class="user" alt="">
            <h3>john deo & Brenda</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
            <img src="images/b3.jpeg" class="user" alt="">
            <h3>john deo & Brenda</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div> -->

    </div>

</section>

<!-- review section ends -->
<!-- <section class="blogs" id="blogs">

    <h1 class="heading"> Marches <span>Publics</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffee</a>
                <span>by admin / 21st may, 2021</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section> -->
<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contactez</span> Nous </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/place/Yaounde+hall+IV+-+Nkondengui/@3.8418485,11.5412476,15z/data=!4m5!3m4!1s0x0:0x7e84d01e9b494d07!8m2!3d3.8418496!4d11.5412644?hl=en-US" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">menu</a>
        <a href="#">products</a>
        <a href="#">review</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
    </div>

   
</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>