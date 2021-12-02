<html lang="en">
    <head>
        <title>Toko Buku Online</title>
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-light fixed-top"
         style="box-shadow: 4px 4px 5px -4px; background: #753422;">
    <div class="container-fluid">
    <a class="navbar-brand" style = "color : #FFEBC9" href="#">OWL BOOK STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"href="index.php">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="index.php">Category</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="index.php">About</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="cart/cart.php">Cart</a>
    </li>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="signin/signin.php">Log In</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="signup/signup.php">Register</a>
    </li>
    </li>
    </li>
    <li class="nav-item">
    <a class="nav-link" style = "color : #FFEBC9" aria-current="page"
        href="logout.php">Log Out</a>
    </li>
    </ul>
    </div>
    </div>
</nav>
        <section>
            <!--navigation-->            
            <?php
            session_start(); 
            if (isset($_SESSION['first_name'])) {
            ?>
            <div class="text-container">
                <h1>Hello <?= $_SESSION['first_name'] ?> Welcome to OWL BOOK STORE</h1>
                <p class="text"  style="margin-top: 1%">Provides a variety of books ranging from educational books, novels, comics, stationery, and many others</p>
                <a class="bshop"><button class="shop">SHOP NOW</button></a>
            </div>
            <?php } else { ?>
            <div class="text-container" >
                <h1 >OWL BOOK STORE</h1>
                <p class="text" style="margin-top: 1%">Provides a variety of books ranging from educational books, novels, comics, stationery, and many others</p>
                <a class="bshop"><button class="shop">SHOP NOW</button></a>
            </div>
            <?php } ?>
        </section>

        <!--category-->
        <div class="category-container" id="category">
            <h2>CATEGORY</h2>
            <div class="box-category">
                <div class="box">
                    <div class="category">
                        <img src="../assets/images/icon/open-book1.svg" alt="book" width="90px" height="90px" align="center">
                        <h4>NOVEL</h4>
                        <p>The Owl Book Store provides a novel with the best seller "Anak Rantau" by A. Fuadi</p>
                        <a href="category/novel.php" class="arrow" align="center"><i class="fas fa-arrow-circle-right" id="bnovel"></i></a>
                    </div>
                    <div class="category">
                        <img src="../assets/images/icon/stationery.svg" alt="stationery" width="90px" height="90px" align="center">
                        <h4>STATIONERY</h4>
                        <p>The Owl Book Store provide various kinds of stationery ranging from pens, pencils, crayons, and others</p>
                        <a href="category/stationery.php" class="arrow" align="center"><i class="fas fa-arrow-circle-right" id="bstationery"></i></a>
                    </div>
                    <div class="category">
                        <img src="../assets/images/icon/comic-book.svg" alt="comic-book" width="90px" height="90px" align="center">
                        <h4>COMIC</h4>
                        <p>The Owl Book Store provide a comic with the best seller "Hai, Miiko! 33" by Eriko Ono</p>
                        <a href="category/comic.php" class="arrow" align="center"><i class="fas fa-arrow-circle-right" id="bcomic"></i></a>
                    </div>
                    <div class="category">
                        <img src="../assets/images/icon/self-improvement.svg" alt="self-improvement" width="90px" height="90px" align="center">
                        <h4>SELF IMPROVEMENT</h4>
                        <p>The Owl Book Store provide a self improvement with the best seller "Filosofi Teras" by Henry M</p>
                        <a href="category/self-improvement.php" class="arrow" align="center"><i class="fas fa-arrow-circle-right" id="bself"></i></a>
                    </div>
                    <div class="category">
                        <img src="../assets/images/icon/education.svg" alt="education" width="90px" height="90px" align="center">
                        <h4>EDUCATION</h4>
                        <p>The Owl Book Store provide a most popular education book that name "Learner-Centered Leadership" by Devin V</p>
                        <a href="category/education.php" class="arrow" align="center"><i class="fas fa-arrow-circle-right" id="beducation"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer>
            <div class="container">
                <div class="sec aboutus" id="about">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum alias reiciendis corrupti saepe esse tempore incidunt laudantium minus vero optio consectetur adipisci ipsam voluptates recusandae omnis autem fugit, dolores nemo earum assumenda? Accusantium, minima voluptate sequi cumque aut labore, ullam, excepturi debitis magni accusamus nemo perferendis corrupti repellat cupiditate alias.</p>
                    <ul class="sci">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></i></a></li>
                    </ul>
                </div>
                <div class="sec quickLinks">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Terms & Consitions</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="sec contact">
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>332 Danau Bratan <br> Malang, Jawa Timur 1111, <br>Indonesia</p>
                        </li>
                    </ul>
                    <ul class="info">
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <p><a href="tel:628134234567">+6281 3423 4567</a><br><a href="tel:628134234567">+6281 3423 4567</a></p>
                        </li>
                    </ul>
                    <ul class="info">
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <p><a href="mailto:aizarrahima@gmail.com">aizarrahima@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <p>Copyright © 2021 Online Tutorials. All Right Reserved.</p>
        </div>
    </body>
</html>