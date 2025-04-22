<h1>Page1</h1>
<p>
<?php

	foreach($data as $row) {
		echo $row['Title'].$row['Content'];
	}
	
?>
</p>
