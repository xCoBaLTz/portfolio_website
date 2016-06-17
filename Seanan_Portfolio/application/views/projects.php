<div>
<?php
	foreach($results as $row){
		$title = $row->title;
		$text1 = $row->text1;
		$text2 = $row->text2;
		$text3 = $row->text3;
		$text4 = $row->text4;
	}
?>
	<?php
	echo heading($title,1);
  ?><a href="http://45.79.168.186/"><?php echo heading($text1,2);?></a>
	<?php
	echo $text2;
	?>
	<br><br>
	<?php
	echo $text3;
	?>
	<br><br>
	<?php
	echo $text4;
	?>
</div>
