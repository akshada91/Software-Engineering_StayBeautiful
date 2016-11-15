<?php

	include("connect-db.php");
	
	function renderForm($Street1 = '', $Street2 ='', $City = '', $State = '', $Zipcode = '', $Phone = '',$error1 = '', $ID = '')
	{ ?>
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
    <title>Edit Buyer Information</title>
	<link href="css/style1.css" rel="stylesheet">    
	</head><body style="background-color: #B2BABB">
	
	<h1 style="text-align: center">Edit Seller Information</h1>
	
	

	<form class="form_edit" action="" method="post">
	<div>
	<?php if ($ID != '') { ?>
	<input type="hidden" name="ID" value="<?php echo $ID; ?>" />
	<p>ID: <?php echo $ID; ?></p>
	<?php } ?>

	<strong>Street 1: </strong> <input type="text" name="Street1"
	value="<?php echo $Street1; ?>"/><br/><br>
	<strong>Street 2: </strong> <input type="text" name="Street2"
	value="<?php echo $Street2; ?>"/><br><br>
	<strong>City: </strong> <input type="text" name="City"
	value="<?php echo $City; ?>"/><br/><br>
	<strong>State: </strong> <input type="text" name="State"
	value="<?php echo $State; ?>"/><br/><br>
	<strong>Zip code: </strong> <input type="text" name="Zipcode"
	value="<?php echo $Zipcode; ?>"/><br/><br>
	<strong>Phone: </strong> <input type="text" name="Phone"
	value="<?php echo $Phone; ?>"/><br/><br>
	<input type="submit" name="submit" class="edit_submit" value="Submit" />
</div>
</form>

</body>
</html>

	
	<?php }	

//Edit Record

	if (isset($_GET['ID']))
	{

		if (isset($_POST['submit']))
		{

			if (is_numeric($_POST['ID']))
			{

				$ID = $_POST['ID'];
				$Street1 = htmlentities($_POST['Street1'], ENT_QUOTES);
				$Street2 = htmlentities($_POST['Street2'], ENT_QUOTES);
				$City = htmlentities($_POST['City'], ENT_QUOTES);
				$State = htmlentities($_POST['State'], ENT_QUOTES);
				$Zipcode = htmlentities($_POST['Zipcode'], ENT_QUOTES);
				$Phone = htmlentities($_POST['Phone'], ENT_QUOTES);
				
				// check that firstname and lastname are both not empty
				
				if ($ID == '' || $Street1 == '' || $Street2 == '' || $City == '' || $State == '' || $Zipcode == '' || $Phone == '')
				{
					
					echo "if they are empty, show an error message and display the form";
					$error = 'ERROR: Please fill in all required fields!';
					renderForm($Street1, $Street2, $City, $State, $Zipcode, $Phone,$error, $ID);
				}
				else
				{
					// if everything is fine, update the record in the database
					echo $Street1;
					echo $Street2;
					echo $City;
					echo $State;
					echo $Zipcode;
					echo $Phone;
					if ($stmt = $mysqli->prepare("UPDATE selleraddress SET Street1 = ?, Street2 = ?, City = ?, State = ?, Zipcode = ?, Phone = ?
					WHERE ID= ?"))
					{
						
						//header("Location: BDashboard.php");
						$stmt->bind_param("ssssssi", $Street1, $Street2, $City, $State, $Zipcode, $Phone,$ID);
						$stmt->execute();
						$stmt->close();
						
					}
					// show an error message if the query has an error
					
							
					else
					{
						echo "ERROR: could not prepare SQL statement.";
					}

					// redirect the user once the form is updated
					header("Location: SellerDashboard.php");
				}
			}
			// if the 'id' variable is not valid, show an error message
			else
			{
				echo "Error!";
			}
		}
		// if the form hasn't been submitted yet, get the info from the database and show the form
		else
		{
			// make sure the 'id' value is valid
			if (is_numeric($_GET['ID']) && $_GET['ID'] > 0)
			{
				// get 'id' from URL
				$ID = $_GET['ID'];

				// get the recod from the database
				if($stmt = $mysqli->prepare("SELECT * FROM selleraddress WHERE ID=?"))
				{
					$stmt->bind_param("i",$ID);
					$stmt->execute();

					$stmt->bind_result($ID, $Street1, $Street2, $City, $State, $Zipcode, $Phone);
					$stmt->fetch();

					// show the form
					renderForm($Street1, $Street2, $City, $State, $Zipcode, $Phone, NULL, $ID);

					$stmt->close();
				}
				// show an error if the query has an error
				else
				{
					echo "Error: could not prepare SQL statement";
				}
			}
			// if the 'id' value is not valid, redirect the user back to the view.php page
			else
			{
				header("Location: SellerDashboard.php");
			}
		}
	}
	$mysqli->close();
?>