<?php

require "config.php";

use App\Pet;

$pet_id = $_GET['id'];

$pet = Pet::getById($pet_id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Pet</title>
</head>
<body>
<h1>Edit Pet</h1>

<form action="save-changes.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $pet->getId(); ?>">
	<div>
		<label>Pet Name</label>
		<input type="text" name="name" placeholder="Pet Name" value="<?php echo $pet->getPetName();?>" />	
	</div>
	<div>
		<label>Pet's Gender</label>
		<input type="text" name="gender" placeholder="Pet's Gender" value="<?php echo $pet->getGender();?>" />	
	</div>
	<div>
		<label>Birthday</label>
		<input type="date" name="birthdate" value="<?php echo $pet->getBirthday();?>" />	
	</div>
	<div>
		<label>Owner Name</label>
		<input type="text" name="owner" placeholder="Owner Name" value="<?php echo $pet->getOwnerName();?>" />	
	</div>
	
	<div>
		<label>Email Address</label>
		<input type="text" name="email" placeholder="email@address.com" value="<?php echo $pet->getEmailAddress();?>" />	
	</div>
	<div>
		<label>Address</label>
		<input type="text" name="address" placeholder="Address" value="<?php echo $pet->getAddress();?>" />	
	</div>
	<div>
		<label>Contact Number</label>
		<input type="text" name="contact_number" placeholder="Contact Number" value="<?php echo $pet->getContactNumber();?>" />	
	</div>
	<div>
		<button>
			Save
		</button>
		<a href="index.php">Cancel</a>
	</div>
</form>
</body>
</html>