<?php

require "config.php";

use App\Pet;

try {
	Pet::register('Arthur', 'Male', '12-25-2002', 'Jeorge', 'montuya@jeorge.com', '619 Aurora Quezon Street', '0934567890');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Apple',
			'gender' => 'Female',
			'birthdate' => '10-13-2002',
			'owner' => 'Vien',
			'email' => 'velasquez@vien.com',
			'address' => 'San Fernando, Pampanga',
			'contact_number' => '091234567'
		],
		[
			'name' => 'Kobe',
			'gender' => 'Male',
			'birthdate' => '01-13-2002',
			'owner' => 'Karl',
			'email' => 'antonio@karl.com',
			'address' => 'Mabalacat, Pampanga',
			'contact_number' => '098765432'
		]
	];
	Pet::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}
