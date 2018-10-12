
<?php
ini_set("display_errors",0);


function password_unhash($num=0){
	$letters = 'abdeghlmnoprstuw';
	$str="";
	while($num>7)
	{
		//Find modulo of given number
		$modulo=fmod($num,37);
		//store one letter in each iteration
		$str.=$letters[$modulo];
		//make number ready for second iteration
		$num=(($num - $modulo)/37);
	
	}
	//reversing the string form by the while loop
	return strrev($str);
}
//passing the argument to function and storing the output of fuction to $result variable
echo $result=password_unhash(18462465839);

// Test Cases
/*assert(password_unhash(18462465839) == 'modern');
assert(password_unhash(485928144) =='apple');
assert(password_unhash(18664780475) =='planet');
assert(password_unhash(500573603) == 'newer');
 */

?>