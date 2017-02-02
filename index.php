<?php

$jsondata = file_get_contents("movies.json");
$json = json_decode($jsondata, true);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies!!!!</title>
</head>
<body>
	<div id="container">
	<h1>Various Movies</h1>
		<ul>
			<?php 
				foreach($json['movies'] as $key  => $value){
					echo '<h4>'.$value['title'].'</h4>';
					echo '<li>Year: '.$value['year'].'</li>'; 
				}
			?>
		</ul>
	</div>
</body>
</html>