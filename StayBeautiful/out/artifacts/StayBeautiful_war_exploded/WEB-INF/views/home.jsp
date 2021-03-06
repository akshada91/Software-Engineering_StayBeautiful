<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%--
  Created by IntelliJ IDEA.
  User: deepi
  Date: 11/4/2016
  Time: 11:17 PM
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>search</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StayBeautiful | Home</title>

    <!-- Font awesome -->
    <link href="<c:url value = "/resources/css/font-awesome.css" />" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<c:url value = "/resources/css/bootstrap.css" />" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="<c:url value = "/resources/css/jquery.smartmenus.bootstrap.css" />" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="<c:url value = "/resources/css/jquery.simpleLens.css" />">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="<c:url value = "/resources/css/slick.css"/>">
    <!-- sidebar -->
    <link rel="stylesheet" type="text/css" href="<c:url value = "/resources/css/sidebar.css"/>">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="<c:url value = "/resources/css/nouislider.css"/>">
    <!-- Theme color -->
    <link id="switcher" href="<c:url value = "/resources/css/theme-color/default-theme.css" />" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="<c:url value = "/resources/css/style.css" />"  rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Loading</span>
    </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->


                            <!-- start currency -->

                            <!-- / currency -->
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>00-62-658-658</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">

                                <li class="hidden-xs"><a href="#">My Cart</a></li>

                                <li class="hidden-xs"><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="index.html">
                                <span> <a href="<c:url value = "/resources/index.html" />" ><img src="<c:url value = "/resources/img/logo.jpg" />"  alt="logo img"></a></span>

                            </a>

                        </div>

                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="" placeholder="Search here ex. 'man' ">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<!-- / header section -->
<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="<c:url value = "/resources/index.html" />" >Home</a></li>
                        <li><a href="#">Skin <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Moisturizers</a></li>
                                <li><a href="#">Toners</a></li>
                                <li><a href="#">Cleansers</a></li>
                                <li><a href="#">Anti-Ageing</a></li>


                            </ul>
                        </li>
                        <li><a href="#">MakeUp <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Face</a></li>
                                <li><a href="#">Eyes</a></li>
                                <li><a href="#">Lips</a></li>
                                <li><a href="#">Nails</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Hairs <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Shampoo</a></li>
                                <li><a href="#">Conditioner</a></li>
                                <li><a href="#">Oils</a></li>
                                <li><a href="#">Hair Masks</a></li>

                            </ul>
                        </li>

                        <li><a href="#">Health Supplements <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Proteins</a></li>
                                <li><a href="#">Vitamins</a></li>
                                <li><a href="#">Everyday Essentials</a></li>


                            </ul>
                        </li>

                        <li><a href="#">Fragrance <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Women's Perfumes</a></li>
                                <li><a href="#">Men's Perfumes</a></li>
                                <li><a href="#">Unisex Fragrance</a></li>
                                <li><a href="#">Sample Perfumes</a></li>

                            </ul>
                        </li>

                        <li><a href="<c:url value = "/resources/contact.html" />">Customer Support</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->
<!-- Sidebar -->


<!-- Start slider -->

<!-- / slider -->
<!-- Start Promo section -->

<!-- / Promo section -->
<!-- Products section -->
<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">

                        <!-- Sidebar -->
                        <div id="sidebar">
                            <!-- Search -->
                            <div class="box search">
                                <h2>Search by <span></span></h2>
                                <div class="box-content">
                                    <form action="#" method="post">
                                        <label>Keyword</label>
                                        <input type="text" class="field" />
                                        <label>Item Name</label>
                                        <input type="text" class="field" />
                                        <label>Brand</label>
                                        <select class="field">
                                            <option value="">-- Select Brand --</option>
                                        </select>
                                        <label>Seller Name</label>
                                        <select class="field">
                                            <option value="">-- Select Seller --</option>
                                        </select>
                                        <div class="inline-field">
                                            <label>Price</label>
                                            <select class="field small-field">
                                                <option value="">$10</option>
                                            </select>
                                            <label>to:</label>
                                            <select class="field small-field">
                                                <option value="">$50</option>
                                            </select>
                                        </div>
                                        <input type="submit" class="search-submit" value="Search" />
                                        </form>
                                </div>
                            </div>
                        </div>




                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <br>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start product category -->
                                <div class="tab-pane fade in active" >
                                    <ul class="aa-product-catg">
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                        <!-- start single product item -->
                                        <li>
                                            <figure>
                                                <a class="aa-product-img" href="#"><img src="<c:url value = "/resources/img/man/polo-shirt-2.png" />" alt="polo shirt img"></a>

                                                <figcaption>
                                                    <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                                                    <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                                                </figcaption>
                                            </figure>


                                        </li>
                                    </ul>
                                    <a class="aa-browse-btn" href="#">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Useful Links</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Search</a></li>
                                            <li><a href="#">Cart</a></li>
                                            <li><a href="#">Customer Support</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Contact Us</h3>
                                        <address>
                                            <p> 107 S Indiana Ave, Bloomington, IN 47405</p>
                                            <p><span class="fa fa-phone"></span>+1 812-349-8724</p>
                                            <p><span class="fa fa-envelope"></span>staybeautiful@gmail.com</p>
                                        </address>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Designed by Group 1</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<c:url value = "/resources/js/bootstrap.js" />" ></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="<c:url value = "/resources/js/jquery.smartmenus.js" />" ></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="<c:url value = "/resources/js/jquery.smartmenus.bootstrap.js" />" ></script>
<!-- Product view slider -->
<script type="text/javascript" src="<c:url value = "/resources/js/jquery.simpleGallery.js" />" ></script>
<script type="text/javascript" src="<c:url value = "/resources/js/jquery.simpleLens.js" />"  ></script>
<!-- slick slider -->
<script type="text/javascript" src="<c:url value = "/resources/js/slick.js" />"  ></script>
<!-- Price picker slider -->
<script type="text/javascript" src="<c:url value = "/resources/js/nouislider.js" />"  ></script>
<!-- Custom js -->
<script src="<c:url value = "/resources/js/custom.js" />" ></script>

</body>
</html>
