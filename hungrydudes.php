<?php  

class HungryDude {
	public $isSober;
	public $weight;
	public $isDepressed;
	public $dancingSkills;
	public $name;


	public function __construct($isSober, $weight, $isDepressed, $dancingSkills, $name) {
		$this->isSober = $isSober;
		$this->weight = $weight;
		$this->isDepressed = $isDepressed;
		$this->dancingSkills = $dancingSkills;
		$this->name = $name;
	}

	public function drink($drink) {
		if ($drink === 'coffee') {
			return $this->isSober = true;
		} else {
			return $this->isSober = false;
		}
	}

	public function activity($activity) {
		if ($activity == 'workout') {
			return $this->weight -= 5;
		} else {
			return $this->weight += 5;
		}
	}

	//if date score < 6 = isDepressed else not Depressed
	public function hotdate($score) {
		if ($score < 6) {
			return $this->isDepressed = true;
		} else { 
			return $this->isDepressed = false;
		}
	}

	//Dancing
	public function danceOff($name1, $name2) {
		if ($name1->dancingSkills > $name2->dancingSkills) {
			return $name1->name . ' wins!';
		} elseif ($name1->dancingSkills < $name2->dancingSkills) {
			return $name2->name . ' wins!';
		} else {
			return "It's a tie!";
		}
	}


}
//Dancing skills = score 1 - 10
$brad = new HungryDude(false, 200, true, 10, "Brad");
$daniel = new HungryDude(true, 180, false, 5, "Daniel");


// foreach ($brad as $key => $value) {
// 	echo "key: $key value: $value <br>";
// }
echo 'Drunk: ' . $brad->drink('coffee') . '<br>';
echo 'Drunk: ' .$daniel->drink('beer') . '<br>';
echo 'Weight: ' . $brad->activity('workout') . '<br>';
echo 'Weight: ' . $daniel->activity('going fishing') . '<br>';
echo 'Depressed: ' . $brad->hotdate(rand(1, 10)) . '<br>';
echo 'Depressed: ' . $daniel->hotdate(rand(1, 10)) . '<br>';
echo 'Dance off: ' . $brad->danceOff($brad, $daniel) . '<br>';

// print_r($brad);
// print_r($daniel);
$guys =[$brad, $daniel];
foreach ($guys as $guy) {
	print_r($guy);

}



?>