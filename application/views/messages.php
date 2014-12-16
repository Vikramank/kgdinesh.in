<br />
<?php
foreach(array_chunk($messages, 4, true) as $rows)
{
	echo '<div class="row">';
	foreach($rows as $row)
	{
		echo '<div class="col-sm-3"><blockquote><p class="msg"><i class="fa fa-quote-left" style="vertical-align:top";></i> '.$row->message.' <i class="fa fa-quote-right" style="vertical-align:top";></i></p><footer>'.$row->user.'</footer></blockquote></div>';
	}
	echo '</div>';
}
?>
