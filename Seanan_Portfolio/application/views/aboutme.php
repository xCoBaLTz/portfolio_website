<link href="<?php echo base_url()?>css/aboutme.css" rel="stylesheet">

<body style="overflow:hidden; margin:auto;">
	<div class="container">
		<?php
			foreach($results as $row){
				$title = $row->title;
				$text1 = $row->text1;
				$text2 = $row->text2;
			}?>
			<div class="info">
				<?php
				echo heading($title, 1);
				echo heading($text1, 2);
				echo heading($text2, 3);
			 ?>
		 </div>
	</div>
</body>
