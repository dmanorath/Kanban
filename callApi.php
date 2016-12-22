<!DOCType html>
<html>
	<head>
		<title>Api Test </title>
	</head>
	<body>
	<section>
		
	</section>
		
	<footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$.ajax("api.php?cid=1", {
				//	type: "GET";
				//	contentType: "application/json";
				//	dataType: "json";
					success: function(result){
						var msg = $("<article></article>");
						msg.append("ID: " + result.id);
						$("section").html(msg).fadeIn("slow");
					}
				});
			});
		</script>
	</footer>
	</body>
</html>