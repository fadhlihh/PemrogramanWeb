		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "online_market_database";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$sql = "SELECT * FROM user";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			
			$sql2 = "SELECT * FROM barang";
			$result2 = $conn->query($sql2);
			$row2 = $result2->fetch_assoc();
			
			$sql3 = "SELECT * FROM kategori";
			$result3 = $conn->query($sql3);
			$row3 = $result3->fetch_assoc();
			mysqli_close($conn);
		?>