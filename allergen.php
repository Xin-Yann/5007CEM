<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>La Vie en Rose Pâtisserie</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/5007CEM/public_html/css/default.css">
        <link rel="stylesheet" href="/5007CEM/public_html/css/nav.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="overflow-hidden">
            <!-- header -->
            <div class="header">
                <div class="container" id="myHeader">
                    <!--mobile-menu-->
                    <div class="d-flex d-lg-none justify-content-between menu-btn">
                        <span id="mobile-menu-button" class="open-button" onclick="openNav()">
                            <i class="fa fa-bars"></i>
                        </span>

                        <div class="pl-5">
                            <a href="index.php">
                                <img src="/5007CEM/public_html/image/logo-1.png" height="70" width="70"/>
                            </a>
                        </div>


                        <div class="menu-icon">
                            <div class="search">
                                <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                                <span style="cursor:pointer"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></span>
                            </div>
                        </div>
                    </div>

                    <form action="searchResult.php" method="GET" id="mobile-menu-button">
                        <div class="searchBox">
                            <input type="text" id="search" name="search" class="size">
                            <button type="submit" style="border: none; background: transparent;">
                                <i class="fa fa-search" Onclick="myFunction()"></i>
                            </button>
                        </div>
                    </form>

                    <div class="row head pt-4" id="menu">

                        <div class="col-lg-8">
                            <a href="index.php">
                                <img src="/5007CEM/public_html/image/logo-1.png" height="100" width="100"/>
                            </a>
                            <h3 class="title px-2 pt-2">La Vie en Rose Pâtisserie</h3>
                        </div>

                        <div class="col-lg-4 pl-5">
                            <div class="search">
                                <form action="searchResult.php" method="GET">
                                    <div class="search">
                                        <input type="text" id="search" name="search">
                                        <button type="submit" style="border: none; background: transparent;">
                                            <i class="fa fa-search" onclick="myFunction()"></i>
                                        </button>
                                    </div>
                                </form>
                                <a href="about.html"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                <span style="cursor:pointer"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></span>
                                <?php
                                // Check if the user is logged in
                                if (isset($_SESSION['user'])) {
                                    echo '<a href="user.php"><i class="fa fa-user" aria-hidden="true"></i></a>';
                                    echo '<a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>';
                                } else {
                                    echo '<a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <hr/>
                </div>

                <div class="menu" id="mySidenav">
                    <a href="javascript:void(0)" id="mobile-menu-button" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index.php">Home</a>
                    <div class="dropdown">
                        <a href="product.php">All Product</a>
                        <div class="dropdown-content">
                            <a href="product.php#cakes">Cakes</a>
                            <a href="product.php#cookies">Cookies & Macaroons</a>
                            <a href="product.php#tarts">Tarts</a>
                            <a href="product.php#pastry">Pastry</a>
                            <a href="product.php#savouries">Savouries</a>
                            <a href="product.php#gift">GiftBox</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="seasonal.php">Seasonal Product</a>
                        <div class="dropdown-content">
                            <a href="seasonal.php#mooncake">Mooncake Set</a>
                            <a href="seasonal.php#father">Father's Day Special</a>
                            <a href="seasonal.php#mother">Mother's Day Special</a>
                            <a href="seasonal.php#christmas">Christmas</a>
                            <a href="seasonal.php#chinese">Chinese New Year</a>
                            <a href="seasonal.php#raya">Hari Raya</a>
                        </div>
                    </div>
                    <a href="customize.php">Customize</a>
                    <div class="dropdown">
                        <a href="faq.html">FAQs</a>
                        <div class="dropdown-content">
                            <a href="allergen.php">Allergen and Diet Information</a>
                            <a href="terms.html">Terms of Service</a>
                            <a href="privacy.html">Privacy Policy</a>
                            <a href="delivery.html">Delivery Policy</a>
                            <a href="pick.html">Pickup Information</a>
                        </div>
                    </div>
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>

            <div class="container hr-line">
                <hr/>
            </div>

            <div class="container text-justify py-5 px-5">
                <h1 class="text-center pb-3 title">Allergen and Diet Information</h1>
                <p>At Bliss Pâtisserie, we are committed to providing a delightful bakery experience while catering to 
                    various dietary needs and allergies. We understand the importance of transparency in food preparation 
                    and strive to make it easy for our customers to make informed choices. Below, you will find information 
                    on common allergens and dietary preferences:
                </p>
                <h4 class="pt-4">Common Allergens:</h4>
                <p>Please be aware that our bakery handles the following common allergens:</p>
                <ol type="1">
                    <li>
                        Gluten: Many of our products contain gluten. We offer gluten-free options, but there is a risk of 
                        cross-contamination in our kitchen.
                    </li>
                    <li>
                        Nuts: Some of our products may contain nuts or nut-based ingredients. 
                        We take precautions to avoid cross-contamination, but there is always a possibility.
                    </li>
                    <li>
                        Dairy: Our recipes often include dairy products. We offer dairy-free alternatives for select items.
                    </li>
                    <li>
                        Eggs: Eggs are used in many of our baked goods.
                        If you have an egg allergy, please inquire about our eggless options.
                    </li>
                    <li>
                        Soy: Soy-based ingredients may be used in some of our products.
                    </li>
                </ol>

                <h4 class="pt-4">Dietary Preferences:</h4>
                <p>We understand that dietary preferences and restrictions vary, and we aim to accommodate as many as possible:</p>
                <ol type="1">
                    <li>
                        Vegan: Look for items labeled as vegan on our menu. 
                        These products are entirely free from animal-derived ingredients.
                    </li>
                    <li>
                        Vegetarian: Most of our products are suitable for vegetarians, as they do not contain meat or fish
                    </li>
                    <li>
                        Gluten-Free: We offer a selection of gluten-free products. However, please note that our kitchen is 
                        not entirely gluten-free, and cross-contamination can occur.
                    </li>
                    <li>
                        Sugar-Free: We offer some sugar-free options, primarily sweetened with natural alternatives like 
                        stevia or monk fruit.
                    </li>
                    <li>
                        Low-Fat: While our baked goods are deliciously indulgent, we also provide a range of low-fat 
                        options for those seeking healthier choices.
                    </li>
                    <li>
                        Low-Sodium: If you are watching your sodium intake, please inquire about our low-sodium selections.
                    </li>
                </ol>
                <h4 class="pt-4">Special Requests:</h4>
                <p>If you have specific dietary requirements or allergies not mentioned above, 
                    please inform to us when placing your order. We will do our best to accommodate your needs and 
                    provide information about suitable options.
                </p>
            </div>

            
            <!-- Footer -->
            <div class="row text-left px-5 pt-5 foot">
                <div class="col-md-4 col-sm-12 pb-3">
                    <h3 class="pb-3">La Vie en Rose Pâtisserie</h3>
                    <p>
                        Indulge in premium French desserts, including our exquisite birthday cakes, that are perfect for
                        gifting and accessible to everyone. Our cakes are crafted from scratch using only the finest halal
                        ingredients, ensuring quality and inclusivity for all.
                    </p>
                    <br>
                </div>

                <div class="col-md-4 col-sm-12 pb-5">
                    <h3 class="pb-3">Quick Links</h3>
                    <div class="row">
                        <div class="col-md-4">
                            <p><a href="index.php">Home</a></p>
                            <p><a href="about.html">About Us</a></p>
                            <p><a href="product.php">All Products</a></p>
                            <p><a href="seasonal.php">Seasonal Products</a></p>
                            <p><a href="customize.php">Customize</a></p>
                            <p><a href="contact.php">Contact Us</a></p>
                        </div>
                        <div class="col-md-8">
                            <p><a href="allergen.html">Allergen and Diet Information</a></p>
                            <p><a href="faq.html">FAQs</a></p>
                            <p><a href="terms.html">Terms of Service</a></p>
                            <p><a href="privacy.html">Privacy Policy</a></p>
                            <p><a href="delivery.html">Delivery Policy</a></p>
                            <p><a href="pick.html">Pickup Information</a></p>
                        </div>

                    </div>

                    <h3 class="py-3">Follow Us</h3>
                    <a href="https://www.facebook.com/lavieenrose.pastisserie/" target="blank"><i class="fa fa-facebook" aria-hidden="true" style="color:white !important"></i></a>
                    <a href="https://www.instagram.com/lavieenrose.patisserie/" target="blank"><i class="fa fa-instagram" aria-hidden="true" style="color:white !important"></i></a>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h3 class="pb-3">Our Store</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7944.049474086806!2d100.335306!3d5.413203!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac35e17db31bb%3A0x1236041f2d3ec9e0!2sLa%20Vie%20en%20Rose%20P%C3%A2tisserie!5e0!3m2!1sen!2smy!4v1695548904517!5m2!1sen!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
                    <p>19, Lebuh Melayu, George Town, 10100 George Town, Pulau Pinang</p>
                    <p>Operating Hours: Wednesday - Sunday : 10AM - 6PM</p>
                    <p>Contact No: 0143336480</p>
                </div>
            </div>
        </div>
        <script src="/5007CEM/public_html/js/mobile-menu.js" type="text/javascript"></script>
    </body>
</html>