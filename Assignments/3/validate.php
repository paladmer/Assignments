<!DOCTYPE html>
<html>
<body>

<?php include "validateConfirm.php"; ?>

<link rel="stylesheet" type="text/css" href="Test.css">

<div align="center" > 
	<h1>Form Validation</h1>
		<p id="smallSize" id="diffFont">HTML5 and server-side validation.</p>
			<div id="makeBorder">  
						
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				
					
					<!-- Note: $vEmail goes to validateConfirm.php and then it checks the userinput $email in the method isValidEmail($email) 
						  It turns red if invalid input--> 
						  
					<label <?php echo ($vEmail) ? "class='lbl'" : "class='lbl-red'" ?> > Email: </label>
					<input class="usr lg-box" type="text/css" name="email" placeholder="Email" required><br><br>


					<label <?php echo ($vfname) ? "class='lbl'" : "class='lbl-red'" ?> >First Name: </label>
					<input class="usr lg-box" type="text/css" name="firstname" placeholder="First Name" required><br><br>
					
				
					<label <?php echo ($vBDay) ? "class='lbl'" : "class='lbl-red'" ?> >Birthday: </label>
					<input class="usr lg-box" type="text/css" name="bday" placeholder="mm/dd/yyyy" required><br><br>
					
				
					<label <?php echo ($vAge) ? "class='lbl'" : "class='lbl-red'" ?> >Age: </label>
					<input class="usr sml-box" type="text/css" name="age" placeholder="age" required><br><br>
					

					<label <?php echo ($vState) ? "class='lbl'" : "class='lbl-red'" ?> >State: </label>
					<input class="usr sml-box" type="text/css" name="state" placeholder="ST" required><br><br>
					
				
					<label <?php echo ($vZip) ? "class='lbl'" : "class='lbl-red'" ?> >Zip: </label>
					<input class="usr sml-box" type="text/css" name="zip" placeholder="Zip" required><br><br>
					
				
					<a href="info.php">
				
					<input class="usr"  type="submit" name="submit" value="Submit Form" > <br> <br> <br> 
					</a>
					 <input class="usr" formaction="Info.php" type="submit" name="submit_button2" value="Submit Form without Validation">	
					
				</form>
			</div>
		<a href="validate.php">Reload Page</a>
</div>



</body>
</html>

