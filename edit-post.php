 <?php require('functions.php'); ?>
 <?php 
 $pid = $_GET['pid'];
	$sql = "SELECT p.PID as pid, u.FirstName as fName, u.LastName as lName, p.Title as pTitle, m.CatName as catName, p.Content as pContent, p.DateCreated as dateCreated
			FROM post p
			INNER JOIN users u ON p.UID = u.UID
			INNER JOIN meta m ON m.CID = p.CID
			INNER JOIN location l ON l.LID = p.LID
			WHERE p.PID = ".$pid;
			
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$user = $row['fName'].' '.$row['lName'];
				echo '<h2>'.$row['pTitle'].'</h2>';
				echo '<h5>'.$user.' - '.$row['dateCreated'].' | '.$row['catName'].' </h5>';
				echo '<p>'.$row['pContent'].'</p>';
			}
		} else {
			echo 'Item Not Found!';
		}
 ?>