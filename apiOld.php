<?php require('config.php'); ?>
<?php 
	  
// get items by cat	
class callApi{
	function getListByCat($cid){
		global $conn;
		
		$sql = "SELECT p.PID as pid, u.FirstName as fName, p.Title as pTitle, m.CatName as catName, p.DateDue as dateDue, p.CID as cid, p.LID as locationID, l.LocationName as locationName
			FROM post p
			INNER JOIN users u ON p.UID = u.UID
			INNER JOIN meta m ON m.CID = p.CID
			INNER JOIN location l ON l.LID = p.LID
			WHERE p.CID = ".$cid." ORDER BY dateDue ASC";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			echo '{';
			while($row = $result->fetch_assoc()) {	
				$dueDate = $row['dateDue'];
				$date1 = new DateTime($row['dateDue']);
				$date2 = new Datetime();
				$diff = date_diff($date1,$date2);
				$due =  $diff->format("%r%a");
				
					echo '{"id": '.$row['pid'].', "post": {';
					echo '"category" : {';
					echo '"catID": '.$row['cid'].', ';
					echo '"catName": "'.$row['catName'].'"';
					echo '}, ';
					echo '"firstName": "'.$row['fName'].'", ';
					echo '"title": "'.$row['pTitle'].'", ';
					echo '"location" : {';
					echo '"locationID": "'.$row['locationID'].'", ';
					echo '"locationName": "'.$row['locationName'].'"';
					echo '}, ';
					echo '"dueDate": "'.$dueDate.'"';
					echo '}}';
			}
		} else {
			echo 'Nothing to show here.';
		}
			echo '}';
	}
}	
	$api = new callApi;
	$catID = $_GET['cid'];
	$api->getListByCat($catID);
//	api.$cid = $_GET['cid'];
//	echo getListByCat($cid);
?>