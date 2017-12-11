<body>
	<a href="sport.php">Sport news
	</a> | 
	<a href="politics.php">Politic news</a><br/><br/>
	<a href="sportjson.php">Sport news (JSON)</a> | 
	<a href="politicsjson.php">Politic news (JSON)</a><br/><br/>
	
	<?php
		$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],
			"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
		
		$category = "sport";

		echo $news["politics"][0] . '<br/>';
		echo $news["politics"][1];

	?>
	


</body>
</html>