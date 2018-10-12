<?php 
function pass_hash($string=''){

	$string=trim($string);
	$letters = 'abdeghlmnoprstuw';
	
	$h = 7;
	for($i = 0; $i < strlen($string); $i++) {
		
		$indexOf = strpos($letters, $string[$i]);
		// the string has an invalid letter in it, so return zero
		if($indexOf === false){
			return 0;
		}
		
		$h = ($h * 37 + $indexOf);
	}
	return $h;
}
$result=pass_hash('modern');
echo $result;


// Test Cases
/*assert(habit_hash('modern') == 18462465839);
assert(habit_hash('apple') == 485928144);
assert(habit_hash('planet') == 18664780475);
assert(habit_hash('newer') == 500573603);
assert(habit_hash('habit') == 0); invalid letter: I */
?>