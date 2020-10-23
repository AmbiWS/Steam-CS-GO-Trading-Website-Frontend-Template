<?php

	function openConn() {
		
		$dbhost = "host";
		$dbuser = "user";
		$dbpass = "pass";
		$db = "db";

		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed: %s\n". $conn->error);

		return $conn;
		
	}
	
	function closeConn(&$conn) {
		
		$conn->close();
		
	}

	if (array_key_exists('updst', $_POST)) {
		
		$conn = openConn();
		$query = "SELECT * FROM `userstats`";
		$result = $conn->query($query);
		$row = mysqli_fetch_row($result);
		
		if ($_POST['updst'] == "tt") {
			
			$data = (int)$row[1] + 1;
			$query = "UPDATE `userstats` SET trades='".mysqli_real_escape_string($conn, $data)."' WHERE id=1";
			
		} else if ($_POST['updst'] == "tu") {
			
			$data = (int)$row[2] + 1;
			$query = "UPDATE `userstats` SET users='".mysqli_real_escape_string($conn, $data)."' WHERE id=1";
			
		} else {
			
			$data = (int)$_POST['updst'];
			$query = "UPDATE `userstats` SET online='".mysqli_real_escape_string($conn, $data)."' WHERE id=1";
			
		}
		
		$conn->query($query);
		closeConn($conn);
		
	} else {
		
		$conn = openConn();
		$query = "SELECT * FROM `userstats`";
		$result = $conn->query($query);
		$row = mysqli_fetch_row($result);

		echo "<div class=\"col col-12 col-md-4 st-info\">

				<p class=\"lead-color\">Successful trades</p>
				<p><img src=\"./src/img/deal.png\"> <span id=\"trades-data\">".number_format($row[1], 0, '', ' ')."</span></p>

			</div>

			<div class=\"col col-12 col-md-4\">

				<p class=\"lead-color\">Registered users</p>
				<p><img src=\"./src/img/users.png\"> <span id=\"r-users-data\">".number_format($row[2], 0, '', ' ')."</span></p>

			</div>

			<div class=\"col col-12 col-md-4 ou-info\">

				<p class=\"lead-color\">Online users</p>
				<p><img src=\"./src/img/user.png\" width=\"56px\" height=\"50px\" id=\"online-users-img\"> <span id=\"o-users-data\">".number_format($row[3], 0, '', ' ')."</span></p>

			</div>";

			closeConn($conn);
		
		}

?>