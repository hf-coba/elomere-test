<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<div class="halaman">

	<div class="row text-center jdlMenu">
		<div class="col">
			<h2>My Project</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col">
			<table>
				<tr>
					<th>ID</th>
					<th>Nama</th>
					<th>Pesan</th>
				</tr>
			<?php 
				$sql = "SELECT * FROM data";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr>";
						echo "<td>".$row["id"]."</td>";
						echo "<td>".$row["nama"]."</td>";
						echo "<td>".$row["pesan"]."</td>";
						echo "</tr>";
					}
				} 
				else { echo "0 results"; } 
				
				$conn->close();
			?>
		</div>
	</div>

</div>