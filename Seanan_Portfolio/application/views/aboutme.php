<div>
<?php
	foreach($results as $row){
		$title = $row->title;
		$text1 = $row->text1;
		$text2 = $row->text2;
	}
?>
<p>
	<?php echo heading($title,1);
	echo $text1; ?>
	<br>
	<?php echo $text2; ?>
</p>
</div>
