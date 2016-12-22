<html>
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

<script type="text/javascript">
	$(document).ready(function() {

		$("#display").click(function() {                

		  $.ajax({    //create an ajax request to load_page.php
			type: "GET",
			url: "display.php",             
			dataType: "html",   //expect html to be returned                
			success: function(response){                    
				$("#responsecontainer").html(response); 
				//alert(response);
			}

		});
	});
	});
</script>
</head>
<body>
<h3 align="center">Manage Student Details</h3>
<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" value="Display All Data" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div>
</body>
</html>