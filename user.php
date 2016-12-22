<?php include('header.php'); ?>
	<a href="#" onClick="goBack()">Go Back</a>
	<?php $uid = $_GET['uid']; ?>
    <div id="board">
        <div id="todo">
        	<div class="title">To Do</div>
            <?php getListByUser($uid, 1); ?>
        </div>
        <!-- end todo -->
        
		<div id="plan">
        	<div class="title">Planning</div>
            <?php getListByUser($uid, 2); ?>
        </div>
        <!-- end todo -->
		
		<div id="inprogress">
			<div class="title">In Progress</div>
			<?php getListByUser($uid, 3); ?>
		</div>
		<!-- end inprogress -->
        
        <div id="intest">
			<div class="title">Testing</div>
			<?php getListByUser($uid, 4); ?>
		</div>
		<!-- end inprogress -->
        
		<div id="done">
			<div class="title">Done</div>
			<?php getListByUser($uid, 5); ?>
		</div>
        <!-- end done -->
	</div>	
<?php include('footer.php'); ?>