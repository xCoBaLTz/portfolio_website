<link href="<?php echo base_url()?>css/project.css" rel="stylesheet">

<body style="overflow:hidden; margin:auto;">
	<div class="container">
		<?php
			foreach($results as $row){
				$title = $row->title;
				$text1 = $row->text1;
				$text2 = $row->text2;
				$text3 = $row->text3;
				$text4 = $row->text4;
			}
		?>
			<div class="info">
				<?php
				echo heading($title, 1);
				echo heading($text1, 2);
				echo heading($text2, 3);
				echo heading($text3, 3);
				echo heading($text4, 3);
			 ?>
			 <img src="http://i.imgur.com/fqEZycA.png" alt="Lockation">
		 </div>
	</div>
</body>
