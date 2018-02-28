<!DOCTYPE html>
<html>
<head>
	<title>Обрезка изображения Jq b php</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/obrezka.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/jquery-ui.min.js"></script>
	<script type="text/javascript">
		$(function() {	
			$('#ramka').draggable({
				containment: "parent"
    		}).filter('#redactor');

    		$('#ramka').click(function() {
				var coord = $('#ramka').offset(); 
    			console.log('top: '+coord.top+' left '+coord.left);
    			$.get("res.php", { ypos: coord.top, xpos: coord.left })
				.done(function(data) {
				  alert("Data Loaded: " + data);
				});
    		});

		});
	</script>
    <link rel="stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/sunny/jquery-ui.css">    
	<style type="text/css">
		#redactor{
			background: grey; 
			padding: 5px;
			position: relative;

		}
		#ramka {
			width: 500px;
		    height: 500px;
		    border: 2px solid;
		    position: absolute;
		    top: 10px;
		    left: 10px;
		}

	</style>
</head>
<body>
	<div id="redactor">
		<div id="ramka"></div>
		<img id="img_red" src="30_nature.jpg">
	</div>

	
</body>
</html>