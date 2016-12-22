<form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group">
		<td><input class="form-control" id="inputdefault" type="text" name="un"></input></td>
		<td><input class="form-control" id="inputdefault" type="password" name="pw" autocomplete="off"></input></td>
		<td><input class="form-control" id="submit" type="submit" name="submit"></input></td>
    </div>
</form>	
<?php 
if(!empty($_SERVER['REQUEST_METHOD'] == "POST")){
	if(!empty($_POST['submit'])){
		$username = $_POST['un'];
		$password = $_POST['pw'];
		
		$conn = mysqli_connect('localhost','root','', 'newdb');
		$sql = "SELECT * From user";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				if($username == $row["username"] && $password == $row["password"]){
					header('Location: admin.php');
				}
				else{
					echo "Your password is incorrect!";
				}
			}
		}
	}
}
?>