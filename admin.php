<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
	td{border-right: 1px solid #ddd}
	td:nth-last-child(1){border-right: 0}
  </style>
</head>
<body>
<div class="container">
<div class="jumbotron">
<h2>Kanban Board</h2>
  <p>Manage list here</p>   
<div class="container" id="addNewArea" style="padding: 10px; background-color: #fff; border-bottom: 10px solid #ddd">
	<form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div class="form-group">
			<div class="col-xs-4">
				<label for="pTitle">Title:</label>
				<input class="form-control" name="pTitle" id="pTitle" type="text" placeholder="Enter Title"/>
			</div>
			<div class="col-xs-2">
				<label for="submit"></label>
				<input class="form-control" name="submit" id="submit" type="submit"/>
			</div>
		</div>
	</form>
</div>
<div class="container" style="background-color: #fff">
  <table class="table">
    <thead>
      <tr>
        <th>To Do</th>
        <th>Planning</th>
        <th>In Progress</th>
        <th>Testing</th>
        <th>Done</th>
      </tr>
    </thead>
    <tbody>

	<?php 
	require('config.php'); 
	
		// database connection
	//	$conn = mysqli_connect('localhost','root','', 'kanboard');
	function getStory(){
		global $conn;
		$sql = "SELECT PTitle FROM story";
		$result = $conn->query($sql);
		$conn->close();
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo  "<td>".$row["PTitle"]. "</td>";
				echo  "<td>".$row["PTitle"]. "</td>";
				echo  "<td>".$row["PTitle"]. "</td>";
				echo  "<td>".$row["PTitle"]. "</td>";
				echo  "<td>".$row["PTitle"]. "</td>";
				echo "</tr>";
			}
		} else {
			echo "0 results <br/>";
		}		
	}
getStory();

function addStory(){			
	if(!empty($_SERVER['REQUEST_METHOD'] == "POST")){
	if(!empty($_POST['submit'])){
		if(!empty($_POST['pTitle'])){
			$title = $_POST['pTitle'];
			global $conn;
		// database connection
		//	$conn = mysqli_connect('localhost','root','', 'kanboard');
			$sql = "INSERT INTO story (PTitle)
				VALUES ('$title')";
			$result = $conn->query($sql);
			$conn->close();
			echo 'New record has been added.';
		} // end if title exisit
		}
	}
	else{
		echo "Please refresh this page to see any changes!";
	}
}

addStory();
?>
	</tbody>
  </table>
</div>
</div>
</div>

</body>
</html>
