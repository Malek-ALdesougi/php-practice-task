<!-- leap year  -->

<?php if (isset($_POST['name'])) : ?>
	Welcome <?php echo $_POST["name"]; ?><br>
<?php endif; ?>

<?php if (isset($_POST['year'])) : ?>

	The year you have enterd is: <?php echo $_POST["year"]; ?> <br>
	<?php if ($_POST["year"] % 4 === 0) {

		// echo ("this year is a leap year");
	} else {
		// echo ("this year is NOT a leap year");
	}
	?>

<?php endif; ?>



<!-- weather -->
<?php if (isset($_POST["temp"])) : ?>
	<?php if ($_POST["temp"] >= 20) {

		// echo "It's summer";
	} else {
		// echo ("it's winter ");
	}
	?>
<?php endif; ?>




<!-- sum of the number  -->
<?php if (isset($_POST["number1"])) : ?>
	<?php if ($_POST["number1"] === $_POST["number2"]) {

		// echo ($_POST["number1"] + $_POST["number2"]) * 3;
	} else {
		// echo ($_POST["number1"] + $_POST["number2"]);
	}
	?>

<?php endif; ?>



<!-- the sum of 30 -->
<?php if (isset($_POST["number3"])) : ?>
	<?php if ($_POST["number3"] + $_POST["number4"] === 30) {

		// echo $_POST["number3"] + $_POST["number4"];
	} else {
		// echo "False : The sum of the numbers not equal 30";
	}

	?>
<?php endif; ?>


<!-- Positive number multiple of 3 -->

<?php
// $number = 2;


// if ($number % 3 === 0) {
// 	// echo "done";
// } else {
// 	// echo "false";
// }

?>

<!-- 6  -->


<?php

// $intNumber = 30;

// if ($intNumber >= 20 && $intNumber <= 50) {
// 	// echo "true";
// } else {
// 	// echo "false";
// }
?>


<?php

// $int1 = 16;
// $int2 = 80;
// $int3 = 20;

// if ($int1 > $int2 && $int1 > $int3) {
// 	// echo "int1 is the greatest";
// } elseif ($int2 > $int1 && $int2 > $int3) {
// 	// echo "Int2 is the greatest";
// } else {
// 	// echo "int3 is the greates";
// }

?>


<!-- if it's an array  -->

<?php

// $nums = [1, 5, 7];

// for ($i = 1; $i <= count($nums); $i++) {
// }

?>

<?php

// $units = 220;

// $counterBill = 0;

// if ($units <= 50) {
// 	echo $units * 2.5;
// } elseif ($units <= 150 && $units > 50) {
// 	echo ((50 * 2.5) + (($units - 50) * 5));
// } elseif ($units <= 250 && $units > 150) {
// 	echo ((50 * 2.5) + (100 * 5) + ($units - 150) * 6.2);
// } else {
// 	echo ((50 * 2.5) + (100 * 5) + (250 * 6.2) + (($units - 250) * 7.5));
// }

// ?>


// <?php

// $checkNum = -1;

// if ($checkNum > 0) {
// 	echo "Positive";
// } elseif ($checkNum < 0) {
// 	echo "Negative";
// } else {
// 	echo "the number is 0 ";
// }
?>

<?php

// $num1 = 2;
// $num2 = 3;

// function addition($one, $tow)
// {
// 	echo $one + $tow;
// }

// function Subtraction($one, $tow)
// {
// 	echo $one - $tow;
// }

// function Multiplication($one, $tow)
// {
// 	echo $one * $tow;
// }

// function Division($one, $tow)
// {
// 	echo $one / $tow;
// }
?>



<?php

// $numArray = [60, 86, 95, 63, 55, 94, 99, 62, 50];


// function loopArray($array)
// {

// 	$sum =  array_sum($array);

// 	$aver =  $sum / count($array);

// 	if ($aver < 60) {
// 		echo "F";
// 	} elseif ($aver < 70) {
// 		echo "D";
// 	} elseif ($aver < 80) {
// 		echo "C";
// 	} elseif ($aver < 90) {
// 		echo "B";
// 	} else {
// 		echo "A";
// 	}
// }
// loopArray($numArray);
?>




<?php

// $colors = ["red", "green", "white"];

// function paraGenerator($arr)
// {
// 	echo "The memory of that scene for me is like a frame of film forever frozen at that moment:
// 		 the $arr[0] carpet, the $arr[1] lawn, the $arr[2] house, the leaden sky. 
// 	The new president and his first lady. - Richard M. Nixon ";
// }
// paraGenerator($colors);

// function orderList($arr)
// {

// 	echo "<ul>
// 	          <li>$arr[0]</li>
// 	          <li>$arr[1]</li>
// 	          <li>$arr[2]</li>
// 	      </ul>";
// }

// orderList($colors);
?>


<?php


// $cities = array(
// 	"Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
// 	"Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
// 	"Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
// 	"Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid"
// );


// asort($cities);

// foreach ($cities as $x => $value) {
// 	// 	echo "The capital of " . $x . " is " . $value;
// 	// 	echo "<br>";
// }


// $color = array(4 => 'white', 6 => 'green', 11 => 'red');

// // echo $color[4] . "<br>";


?>


<!-- Write a PHP script to check if the inserted number is a prime number   ------------>

<?php

// $userInput = 127;

// if ($userInput == 2) {

// 	echo "prime number";
// }

// for ($i = 2; $i < $userInput; $i++) {

// 	if ($userInput % $i == 0) {
// 		echo "This is NOT a prime number!!";
// 	} else {
// 		echo "This is a prime Number";
// 	}
// 	break;
// }
?>


<!----------------- Write a PHP script to reverse a string    ------------------->

<?php

// $word = "malek";

// $wordLength = 0;

// while ($word[$wordLength] != null) {

// 	$wordLength++;
// }

// $reversWord = "";

// for ($i = $wordLength; $i >= 0; $i--) {

// 	$reversWord = $reversWord . $word[$i];
// }

// echo $reversWord . "<br>";
?>


<!-- Write a PHP script to check if the all string characters are lower cases ----------------------->

<?php

// $firstName = "malek";

// $counter = 0;

// if ($firstName === strtolower($firstName)) {
// 	echo "your string is good" . "<br>";
// } else {
// 	echo "Not all lowercase" . "<br>";
// }


// while($firstName[$counter] != null){

// 	if($firstName[$counter] === strtoupper($firstName[$counter])){
// 		echo "your name is not all in lower case";
// 		break ;
// 	}

// 	else {
// 		echo "done";
// 	}

// 	$counter++ ;
// }


// function myStrToLower($firstName) {
//     $from = range('A','Z');
//     $to = range('a','z');
//     return str_replace($from, $to, $firstName);
// }

// echo myStrToLower($firstName);

// function myStringToUpper($test)
// {
// 	$from = range("a", "z");
// 	$to = range("A", "Z");
// 	return str_replace($from, $to, $test);
// }


// echo myStringToUpper("malek") . "<br>";

// Write a PHP function to swap to variables? ---------------------------------------- 



// function swapValues($valOne, $valTwo){

//    $midValue = $valOne ; // midval = 10 

//    $valOne = $valTwo ; // valOne = 5 

//    $valTwo = $midValue ; // valTwo = 10 ;


//    return " x =". $valOne . " " . " y =  " . $valTwo ;

// }


// echo swapValues($x = 10, $y = 5);




// Write a PHP function to check if a number is an Armstrong number or not ?
// **Armstrong number is a number that is equal to the sum of cubes of its digits.---------------------------------- new qestion


// function armstrong($num)
// {
// 	$stringNum = "$num";
// 	$counter = 0;
// 	$sum = 0;

// 	while ($stringNum[$counter] != null) {

// 		$sum = $sum + ($stringNum[$counter] ** 3);

// 		$counter++;
// 	}
// 	if ($sum == $num) {

// 		echo "This is an armstrong NUMBER" . "<br>";
// 	} else {
// 		echo "This is NOT an armstrong number" . "<br>";
// 	}
// }

// armstrong(407);


// $string1 = "Eva, can I see bees in a cave";

// $stringReverse = strrev($string1);
// // echo $stringReverse ;

// if($string1 == $stringReverse){
// 	echo "palindrom" ;
// }

// else {
// 	echo "not palindrom" ;
// }


// function Palindrome($MyString) {
//   $l = 0;
//   $r = strlen($MyString) - 1;
//   $flag = 0;

//   while($r > $l){
//     if ($MyString[$l] != $MyString[$r]){
//       $flag = 1;
//       break;
//     }
//     $l++;
//     $r--;
//   }

//   if ($flag == 0){
//     echo $MyString." is a Palindrome string.\n";
//   } else {
//     echo $MyString." is not a Palindrome string.\n";
//   }
// }

// Palindrome("Eva, can I see bees in a cave");





// Write a PHP function to remove duplicates from an array ? ///////////////////////////////////////////

// $duplicateArray = [2, 4, 7, 4, 8, 4];


// echo $count;

// function removeDuplication($arr)
// {

// 	$filterdArray = [];
// 	$count = 0;
// 	while ($arr[$count] != null) {
// 		$count++;
// 	}

// 	for ($i = 0; $i <= $count; $i++) {

// 		for ($k = 0; $k <= $count; $k++) {

// 			if (!in_array($arr[$i], $filterdArray)) {

// 				array_push($filterdArray, $arr[$i]);
// 			}
// 		}
// 	}
// 	echo print_r($filterdArray);
// }


// removeDuplication($duplicateArray);



?>