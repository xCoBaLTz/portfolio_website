	<div>
<?php
	foreach($results as $row){
		$title = $row->title;
		$text1 = $row->text1;
		$text2 = $row->text2;
	}
	echo heading($title, 1);
?>
	<?php echo $text1; ?>
	<br>
	<?php echo $text2; ?>
</div>
