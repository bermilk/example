<?php
$json = file_get_contents('https://raw.github.com/maqe/maqe/gh-pages/persons.json');
//$url="http://www.worldweatheronline.com/feed/weather.ashx?q=schruns,austria&format=json&num_of_days=5&key=8f2d1ea151085304102710";

//$json = file_get_contents('test.json');
$data = json_decode($json);

foreach ($data as $key) {
	//echo $key->weather[1]->date;
	//print '<br/>';
	//echo $key->current_condition[0]->cloudcover;
	//print '<br/>';
	//echo $key->request[0]->query,'-',$key->request[0]->type;
	//echo $key->firstName;
	//echo $key->error[0]->msg;
	if($key->nickname){
	echo "<br />";
	  echo "<li class='person'>";
	    echo "<img src='http://images/goes/here.jpg' />";
	    echo "<div class='name'>".$key->firstName."(".$key->nickname.")</div>";
	    echo "<div class='title'>Title</div>";
	  echo "</li>";
	}
}
?>
<?php
$array = array(1=>'a',2=>'b',3=>'c');
foreach ($array as $key) {
	//echo "<button id='btn_".$key."' name='button_".$key."'><span class='button'>button_".$key."</span></button>";
	echo "<a id='btn_".$key."' class='btn' href='www.hotmail.com' src='image.gif'>".$key."</a>";
	echo "<br/>";
}
?>
