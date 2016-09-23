<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ĐIỀU KHIỂN LED</title>
	<style type="text/css">
		body {
			width: 50%;
			margin: 20px auto;
			border: 2px solid SaddleBrown;

		}
		h1 {
			text-align: center;
			color: SaddleBrown;
			margin: 0px;
			padding: 20px;
		}
		.wrapper{
			text-align: center;
			width: 100%;
			background: #99FF99;
			margin: 0px;
		}
		.r{
			color: blue;
			font-weight: bold;
			font-size: 3em;
		}
		.led{
			width: 20%;
			margin: 20px;
			font-weight: bold;
			color: red;
		}

	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".led").click(function(event) {
				/* Act on the event */
				if ( $(this).attr('src') == 'led_on.png')
					$(this).attr('src', 'led_off.png');
				else 
					$(this).attr('src', 'led_on.png');
			});
			
		});
	</script>
</head>
<body>
<?php
	$file = file_get_contents('data.txt');
	$dataIn = explode(',', $file);
	if ( isset($_POST["led1_x"], $_POST["led1_y"]) ) {
		$dataIn[1] = ($dataIn[1] == 1) ? 0 : 1; 
		$dataOut = implode(',', $dataIn);
		file_put_contents('data.txt', $dataOut);
	}
	if ( isset($_POST["led2_x"], $_POST["led2_y"]) ) {
		$dataIn[2] = ($dataIn[2] == 1) ? 0 : 1; 
		$dataOut = implode(',', $dataIn);
		file_put_contents('data.txt', $dataOut);
	}
	if ( isset($_POST["led3_x"], $_POST["led3_y"]) ) {
		$dataIn[3] = ($dataIn[3] == 1) ? 0 : 1; 
		$dataOut = implode(',', $dataIn);
		file_put_contents('data.txt', $dataOut);
	}
?>
<div class="wrapper">
		<h1>BẢNG ĐIỀU KHIỂN LED</h1>
		<div class="r"><?=$dataIn[0]?>K</div>
		<form action="" method="post">
		<input type="image" src=<? echo ($dataIn[1] == 1) ? '"led_on.png"':'"led_off.png"';?> alt="LED 1" name="led1" class="led">			
		<input type="image" src=<? echo ($dataIn[2] == 1) ? '"led_on.png"':'"led_off.png"';?> value="" alt="LED 2" name="led2" class="led">
		<input type="image" src=<? echo ($dataIn[3] == 1) ? '"led_on.png"':'"led_off.png"';?> alt="LED 3" name="led3" class="led">
		</form>
	</div>
</body>
</html>
