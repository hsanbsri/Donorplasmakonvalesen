<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "db_plasmakonvalesen";

	$conn = mysqli_connect("localhost", "root", "", "db_plasmakonvalesen");

	function registrasi($data) {
		global $conn;

		$email = mysqli_real_escape_string($conn, $data["email"]);
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$password2 = mysqli_real_escape_string(
			$conn, $data["re_pass"]);

		mysqli_query($conn, "INSERT INTO login VALUES('', '$email', '$PASSWORD')");

		return mysqli_affected_rows($conn);
	}
 ?>
