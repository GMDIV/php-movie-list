<?php

$jsondata = file_get_contents("movies.json");
$json = json_decode($jsondata, true);

?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body {background-color: #c2d6d6; }
		h1 {text-align: center;}
		h4 {margin: 0; padding: 5px; background: #f9f2f5; padding-right: 5px;}
		li {list-style: none; padding-left: 5px; padding-right: 5px;}
		#container {width: 600px; margin: auto; overflow: hidden; }
	</style>
	<title>Movies!!!!</title>
</head>
<body>
	<div id="container">
	<h1>Various Danny McBride Movies</h1>
		<ul>
			<?php 
				foreach($json['movies'] as $key  => $value){
					echo '<h4 ><a href="'.$value['movieLink'].'">'.$value['title'].'</a></h4>';
					echo '<li>Year: '.$value['year'].'</li>';
					echo '<li>Genre: '.$value['genre'].'</li>';
					echo '<li>Role: '.$value['role'].'</li>';
					echo '<li>Director: <a href="'.$value['directorLink'].'">'.$value['director'].'</a></l1>';
				}
			?>
		</ul>
	</div>
</body>
</html>