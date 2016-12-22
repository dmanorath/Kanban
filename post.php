<?php include('header.php'); ?>
<a href="#" onClick="goBack()">Go Back</a> | <a href="edit-post.php?pid=<?php echo $_GET['pid']; ?>">Edit this post</a>
<div id="content">
<?php 
	$pid = $_GET['pid'];
	getPostCont($pid);
?>
</div>
<script>
function goBack() {
    window.history.back();
}
</script>