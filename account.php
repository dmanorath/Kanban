<?php include('header.php'); ?>
	<a href="#" onClick="goBack()">Go Back</a>
	<?php $uid = $_GET['uid']; ?>
<section>
	<div class="content-wrap">
		<?php accountSetting($uid); ?>
	</div>
</section>
<?php include('footer.php'); ?>