<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
	.flex {
		display: flex;
	}

	.container {
		justify-content: space-between;
		padding: 10px;
	}

	.fa {
		color: pink;
	}

	p {
		  border: 2px solid pink;
		  padding: 5px;
	}
</style>
<body>
	<?php 
		$flowers = array(
		"Rose" => array(
		"name" => "Rose",
		"species" => "Rosaceae",
		"img" => "https://images.homedepot-static.com/productImages/234252ba-cda0-4793-bcd9-84b6c4a9818c/svn/spring-hill-nurseries-rose-bushes-93586-64_300.jpg"
		),
		"Tulip" => array(
		"name" => "Tulip",
		"species" => "Liliaceae",
		"img" => "https://garden.org/pics/2018-05-05/mellielong/31915d-300.jpg"
		),
		"Lily" => array(
		"name" => "Lily",
		"species" => "Liliaceae",
		"img" => "https://www.hwhyde.co.uk/files/cache/709c5b2b8ef766b32079c18c4f086346_f194.jpg"
		)
		);

		echo "<div class='container flex'>";
			foreach ($flowers as $value) {
				echo '<div class="col">
						<h1>'. $value["name"] . '</h1>
						<h2>'. $value["species"] .'</h2>
						<img src='. $value["img"] .'>
					</div>';
			}
		echo '</div>';
		echo '<br>';

		$heart = '<i class="fa fa-heart"></i>';
		$star = '<i class="fa fa-star"></i>';
		$magic = '<i class="fa fa-magic"></i>';

		echo "<div class='container flex'>";
		for ($i = 1; $i < 6; $i++) { 
			echo '<p>Heart '.$heart.'</p>';
			
		}

		$j=5;

		while($j <= 9) {
			echo '<p>Star '.$star.'</p>';
			$j++;
		}

		$k = 5;
		do
		{
			echo '<p>Magic '.$magic.'</p>';
			$k++;
			
		}
		while ($k <= 9);
		echo '</div>';

	?>
</body>
</html>