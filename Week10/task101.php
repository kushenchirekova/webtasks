<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.main
			{
				border:2px solid black;
				border-radius: 20px;
				width: 300px;
				height: 120px;
			}
			.info
			{
				position: relative;
			}
			.row1
				{
					position: absolute;
					left: 20px;
				}
			.row4
				{
					margin-top: -20px;
					border:2px solid black;
					border-radius: 50px;
					background-color: black;
					color: white;
				}
				.row3
				{
					position: absolute;
					right: 20px;
					top:30px;
				}
				.types
				{
					margin-top: 90px;
					margin-left: 20px;
				}
	</style>
</head>
<body>
	<div class="main">
			<?php
					$model= $_GET["model"];
					$cost= $_GET["cost"];
					$type=$_GET["Type"];
					$year=$_GET["year"];
					$att=$_GET["att"];
				?>
				<div class="info">
					<div class='row1'>
						<h4> <?=$model?></h4>
						<div class='row4'><?=$year?></div>
					</div>
					<div class='row3'>
						<div class='row5'> <?=$type?> </div>
						<div class='row2'> <?=$cost?> </div>
					</div>
				</div>
				<div class="types">
					<?php foreach ($att as $value) {?>
							<?= $value ?>,
						<?php } ?>
				</div>
	</div>

</body>
</html>
