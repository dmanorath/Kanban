 <?php // require('functions.php'); ?>
 <form action="" method="">
	<input type="text" name="title" placeholder="Enter title here..." required></input> <br/><br/>
	<textarea cols="50" rows="10" name="content" placeholder="Description goes here..." required></textarea><br/><br/>
	<input type="date" name="dateDue" required></input> <br/><br/>
	<input type="submit" name="submit" placeholder="Description goes here..."></input>
 </form>
 <?php 
/*
	$title = $_POST['title'];
	$content = $_POST['content'];
	$dateCreated = date("Y-m-d H:i:s");
	$dateDue = $_POST['dateDue'];
	$uid = $_POST['uid'];
	$lid = $_POST['uid'];
	$cid = $_POST['uid'];
	$sql = "INSERT INTO post (Title, Content, DateCreated, DateDue, UID, LID, CID)
					   VALUES($title, $content, $dateCreated, $dateDue, $uid. $lid, $cid)";
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
			
	//$result = $conn->query($sql);

*/		
 ?>