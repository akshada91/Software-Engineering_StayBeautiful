<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>StayBeautiful | Home</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    
	<!-- sidebar -->
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
    
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <style>
	.button {
		background-color:#57C5A0;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 20px;
		margin: 4px 2px;
		cursor: pointer;
		height:45px;
        width:300px;
	}
	body {
    background-color:#EBE7DF;
	background-repeat: no-repeat;
	background-size: 100% 100%;
    }
	</style>

  </head>
  <body id="SellerDashboard"> 
   <!-- wpf loader Two -->
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
                  
                  <li class="hidden-xs"><a href="cart.html">My Cart</a></li>
                
                  <li class="hidden-xs"><a href="Login.html">Login</a></li>
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
                <a href="index.php">
                  <span> <a href="index.php"><img src="img/logo.jpg" alt="logo img" height=100px width=100px></a></span>
                  
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="SearchResult.php" method="post" id="searchForm">
                  <input type="text" name="q" id="searchbox" placeholder="Search here ex. 'MakeUp' " maxlength="25" >
                  <button type="submit" >Go!<span class="fa fa-search"></span></button>
                </form>
				<!--
				
				--!>
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
              <li><a href="index.php">Home</a></li>
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
              
              <li><a href="customer-support.html">Customer Support</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  
  <!-- / slider -->
  <!-- Start Promo section -->
  
  <!-- / Promo section -->
  <h1><strong><center>Welcome!</center></strong></h1>
  <p align="right">
  <marquee SCROLLDELAY=0 scrollamount=20> 
  <img src="http://www.latestfreestuff.co.uk/wp-content/uploads/2015/04/Free-MAC-lipstick.png" width="220" height="220">
  <img src="http://www.paulaschoice.com/_resources/www/paulaschoice/_system/objectImage/beautypediaProduct/EF2F396D-3473-4D7A-88AD-FDCE5F9BADC3_417IEpX8OcL.jpg" width="220" height="220">
  <img src="https://si.wsj.net/public/resources/images/PJ-BN544_HAIRAG_DV_20130403182827.jpg" width="220" height="220">
  <img src="https://evolutionofsmooth.com/media/catalog/category/eos-shimmer-lip-balm-pink-pearl-open.png" width="220" height="220">
  <img src="http://www.royaleph.com/wp-content/uploads/2016/05/royale-fastrim.jpg" width="220" height="220">
  <img src="https://images-na.ssl-images-amazon.com/images/I/6188XWx70EL._SY450_.jpg" width="220" height="220">
  <img src="https://images-na.ssl-images-amazon.com/images/I/61qlEQWV4KL._SY679_.jpg" width="200" height="220"></marquee>
  </p>
  <h2 s><strong><center><b>Reports</b></center></strong></h2>
  <form action="demo_form.asp" method="get">
  <p align="center">
  <button class="button" type="submit" value="Report">Revenue Report</button>
  </p>
  <p align="center">
  <button class="button" type="submit" value="Report">Items sold Report</button>
  </p>
  <p align="center">
  <button class="button" type="submit" value="Report">Update Inventory</button>
  </p>
  </form>
  <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "staybeautiful";
	$conn = new mysqli($servername, $username, $password, $dbname);
						if($conn->connect_error){
								die("Connection failed: " . $conn->connect_error);
						}
	if($result = $conn->query("SELECT * FROM selleraddress where ID=1"))
	{
		if($result->num_rows != 0)
		{
			$row = $result->fetch_row();
			echo "<table>";
			echo "<table class='table' border='2' cellpadding='20'>";
			echo "<tr>";
			echo "<th>Buyer ID</th><th>Street 1</th><th>Street 2</th><th>City</th><th>State</th><th>Zip Code</th><th>Phone</th>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>" .$row[0]. "</td>";
			echo "<td>" .$row[1]. "</td>";
			echo "<td>" .$row[2]. "</td>";
			echo "<td>" .$row[3]. "</td>";
			echo "<td>" .$row[4]. "</td>";
			echo "<td>" .$row[5]. "</td>";
			echo "<td>" .$row[6]. "</td>";
			echo "</tr>";
			echo "</table>";
		}
		else
			{
				echo "No results to display!";
			}					
	}
	else
		{
		 echo "Error: " . $conn->error;
		}
		$conn->close();
  ?>
  <h2><center><a href='SellerInformationUpdate.php?ID=1'>Update Personal Information</a></center></h2>
  
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
                      <li><a href="landing.html">Home</a></li>
                                            
                      <li><a href="customer-support.html">Customer Support</a></li>
                      
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
            <p>Designed by Group 1</a></p>
            
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
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>