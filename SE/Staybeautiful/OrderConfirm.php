<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "staybeautiful";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}

        if (isset($_POST['tbl'])) {
            //if the page has been submitted, append the rows
			 
			 $myArray = explode(',', $_POST['tbl']);
			 array_splice($myArray, 0, 1);
			 $arrlength = count($myArray);
			 
			 $orderid=rand();


			 
			 for($i = 0; $i <$arrlength; $i += 3){
					
					if (($i+1 < $arrlength)and($i+2 < $arrlength)) {
						$name = $myArray[$i];
					$qty = $myArray[$i+1];
					$price = $myArray[$i+2];
					
						
						
						
						
						$sql = "INSERT INTO orderconfirmation (OrderId,Productname, Quantity, Price,Date)VALUES ('$orderid','$name','$qty','$price',now())";
						if($conn->query($sql) == TRUE){
			
							}
							else{
								echo "Some error encpuntered";
							}
		
					}

			 }
				}
			
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>StayBeautiful | Home</title>
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	
	<link href="css1/indexstyle.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--- start-mmmenu-script---->
	<script src="js1/jquery.min.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="css1/jquery.mmenu.all.css" />
	<script type="text/javascript" src="js1/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>




  </head>
  <body>
      
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i>Top</a>
  <!-- END SCROLL TOP BUTTON -->
  
  <!-- END SCROLL TOP BUTTON -->


  <!-- start header -->
<div class="top_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images1/logo.jpg" alt="" height=125px width=150px;/></a>
		</div>
		 <div class="log_reg">
				<ul>
					<li><a href="login.html">Login</a> </li>
					<span class="log"> or </span>
					<li><a href="login.html">Register</a> </li>								   
					<div class="clear"></div>
				</ul>
		</div>	
		<div class="web_search">
		 	<form action="SearchResult.php" method="post" id="searchForm">
                  <input type="text" name="q" id="searchbox" placeholder="Search here ex. 'MakeUp' " maxlength="25" >
                  <button type="submit" >Go!<span class="fa fa-search"></span></button>
                </form>
	    </div>						
		<div class="clear"></div>
	</div>	
</div>
</div>
<!-- start header_btm -->

<?php
	
	$pdo = new PDO("mysql:host=localhost;dbname=staybeautiful",'root','');
	
	$sql = "SELECT * FROM Menu ORDER BY MenuId";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();

?>

<div class="wrap">
<div class="header_btm">
		
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
				<?php
					while ($row = $stmt->fetch(PDO::FETCH_OBJ)){
						$sub_sql = "SELECT * FROM Submenu WHERE CatId=:MenuId";
						$sub_stmt = $pdo->prepare($sub_sql);
						$sub_stmt->bindParam(':MenuId',$row->MenuId,PDO::PARAM_INT);
						$sub_stmt->execute();
						
						?>
						<li><a href=""><?php echo $row->MenuName; ?></a>
						<?php
						if($sub_stmt->rowCount()){
							?>
							<ul class="dropdown-menu">
								<?php
								while($sub_row = $sub_stmt->fetch(PDO::FETCH_OBJ)){
									?>
									<li><a href="<?php echo $sub_row->Href;  ?>">
									<?php echo $sub_row->SubName;  ?>
									
									</a></li>
									<?php
								}
								
								
								?>
							
							</ul>
							<?php
						}
						?>
						</li>
						<?php
					}
					
			
			
				?>
				<li><a href="customer-support.html">Customer Support</a></li>
			</ul>
			
              
              
              
          
          </div><!--/.nav-collapse -->
        </div>
	<div class="clear"></div>
</div>
</div>

<!-- Menu End -->
 
  <!-- Order Confirmation section -->
  <div id="site">
  <div id="content">
  <section id="aa-catg-head-banner" style="min-height:100%; min-width: 100% ; ">
  
	<h2 style="margin-left:10px;" >Order Confirmation Page</h2>
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>                   
          <li style="margin-left:10px;" class="active">Order Confirmation</li>
        </ol>
   
	<p style="margin-left:10px;"> Congratulations! Your order has beeen placed succesfully.
	Expect your product to get delievered within 5 business days.
	The tracking information will be sent to you shortly..</p>
	
	<p style="margin-left:10px;"><strong> Order Id: <?php echo $orderid ?> </p>
	
	
			

		
  </section>
  </div>
  </div>
  

<!-- Order Confirmation section -->
 


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>



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
  <!-- Add to cart Jquery -->
  <script type="text/javascript" src="js/jquery.shop.js"></script>  


  </body>
</html>