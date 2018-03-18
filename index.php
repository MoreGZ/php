
<?php 
	// 数据库操作
	// ojb = {}
	$a = "this is a";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			width: 100px;
			height: 100px;
			background: red;		}
	</style>
</head>
<body>
	<div>
		<?php 
			echo $a;
		?>
	</div>
	<button id="btn">click</button>
</body>
<script type="text/javascript">
	var btn = document.getElementById("btn")
	btn.onclick = function(){
		console.log("this is clcik");
	}
</script>
</html>