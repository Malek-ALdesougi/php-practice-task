<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

  <?php
  // define variables and set to empty values
  // $name = $email = $gender = $comment = $website = "";

  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   $name = test_input($_POST["name"]);
  //   $email = test_input($_POST["email"]);
  //   $website = test_input($_POST["website"]);
  //   $comment = test_input($_POST["comment"]);
  //   $gender = test_input($_POST["gender"]);
  // }

  // function test_input($data) {
  //   $data = trim($data);
  //   $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }
  ?>

  <!-- <h2>PHP Form Validation Example</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 

  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form> -->

  <?php
  // $name = $_POST["name"];
  // $email = $_POST["email"];
  // $website = $_POST["website"];
  // $Comment = $_POST["Comment"];
  // $Gender = $_POST["Gender"];

  // echo "<h2>Your Input:</h2>";
  // echo $name;
  // echo "<br>";
  // echo $email;
  // echo "<br>";
  // echo $website;
  // echo "<br>";
  // echo $comment;
  // echo "<br>";
  // echo $gender;
  ?>

  <!-- <form action="#" method="post">
    Name :<input type="text" name="string">
    <input type="submit" value="submit" name="submit">
  </form> -->

  <?php

  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   if (isset($_POST["submit"])) {

  //     $str = $_POST["string"];
  //     // counter($str);
  //   }
  // }

  // Write a PHP function that checks whether a string is all lowercase -------------

  // $name = "malk";


  // function checkLower($str)
  // {

  //   $count = 0;
  //   while ($str[$count] != null) {
  //     $count++;
  //   }

  //   for ($i = 0; $i <= strlen($str); $i++) {

  //     if ($str[$i] === strtoupper($str[$i])) {

  //       echo "your name is not all lowercase !!";
  //       return ;
  //       }
  //   }
  //   echo "done";
  // }

  // checkLower("malek");


  // Create a new DOMDocument
  // $domDocument = new DOMDocument('1.0', 'iso-8859-1');

  // // Use createElement() function to add a new element node
  // $domElement = $domDocument->createElement('organization', 'GeeksforGeeks');

  // // Append element to the document
  // $domDocument->appendChild($domElement);

  // // Save XML file and display it
  // echo $domDocument->saveHTML();


  // $strign = "refactor r";

  // $counter = 0 ;
  // $numberOfLetters = 0 ;

  // while($strign[$counter] != null){

  //   if($strign[$counter] == "r"){
  //     $numberOfLetters++;
  //   }

  //   $counter++;
  // }

  // echo "The number of r letters in your name is : " . $numberOfLetters ;


  // $string = "maler rrrrr";

  // $counter = 0 ;
  // $letterCounter = 0 ;

  // while($string[$counter] != null){

  //   if($string[$counter] == "r"){
  //     $letterCounter++ ;
  //   }

  //   $counter++ ;
  // }


  // echo "your letter r number is ". $letterCounter ;


  // refactor the above code 



  // function counter($str)
  // {

  //   $strArray = str_split($str);

  //   $counter = 0;
  //   $letterCounter = 0;

  //   while ($strArray[$counter] != null) {

  //     if ($strArray[$counter] == "r") {

  //       $letterCounter++;
  //     }

  //     $counter++;
  //   }
  //   echo $letterCounter;
  // }
  ?>
  <?php

  // class AppleDevice
  // {
  //   //properties 
  //   public $ram;
  //   public $inch;
  //   public $space;
  //   public $color;
  //   public $screen = "LCD";
  //   public $name;

  //   //Method
  //   public function __costruct($val1, $val2, $val3, $val4)
  //   {
  //     $this->ram = $val1;
  //     $this->inch = $val2;
  //     $this->space = $val3;
  //     $this->color = $val4;
  //   }

  //   public function sayHello($messege)
  //   {
  //     $this->name = $messege;
  //     echo "Welcom To " . $messege;
  //   }
  // }

  // $iPhone6 = new AppleDevice();
  // $iPhone6->__costruct('5G', "7inc", "35G", "red");
  // $iPhone6->sayHello("iPhone");
  // $iPhone6->price = "800gold";
  // echo '<pre>';
  // print_r($iPhone6);
  // echo '</pre>';

  ////////////////////////////////    New Calss    ////////////////////////////////

  // class Sony extends AppleDevice
  // {
  //   //properties 
  //   public $camera = "25MB";


  //   //Method
  //   // Inherited from parent 
  //   public function sayHello($messege)
  //   {
  //     $this->name = $messege;
  //     echo "Welcom To " . $messege;
  //   }
  // }

  // $sony = new Sony();
  // $sony->__costruct('5G', "7inc", "35G", "red", "25MB");
  // $sony->sayHello("Sony");
  // echo "<pre>";
  // print_r($sony);
  // echo "</pre>";
  // 
  ?>



  <!-- <table style="border:6px solid red">
    <tbody style="border:6px solid red" >

      <tr>
        <td><?php echo $one ?></td>
        <td><?php echo $tow ?></td>
        <td><?php echo $thr ?></td>
        <td><?php echo $four ?></td>
        <td><?php echo $five ?></td>
        <td><?php echo $six ?></td>
        <td><?php echo $sev ?></td>
        <td><?php echo $ei ?></td>
        <td><?php echo $ni ?></td>
        <td><?php echo $ten ?></td>
        
      </tr>
    </tbody>
  </table> -->


  <!-------------------------------------------- Simple Calculator -------------------------------------------------------


  Q5: Write a PHP Calculator class that will accept two values as arguments, then add them,
  subtract them, multiply them together, or divide them on request. For example :
  $mycalc = new MyCalculator( 12, 6);
  echo $mycalc- > add(); // Displays 18
  echo $mycalc- > multiply(); // Displays 72 -->


  <?php


  // class Calc
  // {

  //   public $name;
  //   public $language;

  //   // function __construct($ss, $dd)
  //   // {
  //   //   $this->name = $ss ;
  //   //   $this->language = $dd ;
  //   // }

  //   public function add($val1, $val2)
  //   {
  //     return $val1 + $val2;
  //   }

  //   public function subtract($value1, $value2)
  //   {
  //     return $value1 - $value2;
  //   }

  //   public function multiply($v1, $v2)
  //   {
  //     return $v1 * $v2;
  //   }

  //   public function division($v3, $v4)
  //   {
  //     return $v3 / $v4;
  //   }

  // }

  // $mycalc = new Calc("Calculator", "PHP");

  // echo $mycalc->add(1, 2);
  // echo "<br>";
  // echo $mycalc->subtract(3, 5);
  // echo "<br>";
  // echo $mycalc->multiply(2, 2);
  // echo "<br>";
  // echo $mycalc->division(1, 2). "<br>";
  // //  print_r($mycalc);
  ?>

  <!-- for($k = 1; $k <= 100; $k++){
     -->
  <!-- } -->




  <!------------------------------------ // table of multiply  -------------------------------------------------->


  <?php


  // $num = 1;
  // $count = 1;

  // function createMulitiplicationTable($test)
  // {
  //   $multiply = 1;

  //   for ($k = 1; $k <= 100; $k++) {

  //     $result = $test * $multiply;

  //     echo "<tr><td> $result </td>";
  //     $test++;

  //     if ($test > 10) {
  //       echo "<br>";
  //       $multiply++;
  //       $test = 1;
  //     }
  //   }
  // echo "<table style=border: 1px solid black><tr>$data</tr></table>";

  // }




  ?>

  <!-- <tr id="one"></tr>


  <?php //echo createMulitiplicationTable($num) 
  ?>

  <?php //createMulitiplicationTable("malek") 
  ?> 




   
 Write a PHP script to extract text (within square brackets ) from a string.- ---------------------------------------- new Q 
Sample strings: 'The quick brown [fox].'
Expected Output: 'fox' -->


  <?php
  // function length($str)
  // {
  //   $count = 0;

  //   while ($str[$count] != null) {

  //     $count++;
  //   }
  //   return $count;
  // }
  // $text = "life is [Not good solution because I used two for loops]";
  // function checkLetters($test)
  // {
  //   $emptyString = "";

  //   for ($i = 0; $i <= strlen($test); $i++) {

  //     if ($test[$i] == "[") {
  //       for ($k = $i + 1; $k <= strlen($test); $k++) {

  //         if ($test[$k] == "]") {
  //           break;
  //         }
  //         $emptyString .= $test[$k];
  //       }
  //     }
  //   }
  //   return $emptyString . "<br>";
  // }


  // echo checkLetters($text);


  // solution 2 using regular expretions -------------------------

  // $regEx = "/\[(.*?)\]/";

  // preg_match($regEx, $text, $result);

  // print_r($result[1]);

  ?>

  <?php

  // function lowecaseChecker($str)
  // {

  //   $length = 0;

  //   while ($str[$length] != null) {
  //     $length++;
  //   }

  //   $result = 0; // flag to check increase if the condition is true ;

  //   for ($u = 0; $u < $length; $u++) {

  //     if ($str[$u] == strtoupper($str[$u])) {

  //       $result += 1;
  //     } else {
  //       continue;
  //     }
  //   }

  //   if ($result == 0) {
  //     echo "Done, all lowercase";
  //   } else {
  //     echo "You string is not all loweCase!!";
  //   }
  // }

  // lowecaseChecker("malek");

  ?>

  <?php

  // reverse a string  


  // function reverseString($str){

  //   $length = strlen($str);
  //   $reversedString = "";

  //   for($m = $length - 1; $m >= 0; $m--){

  //     $reversedString .= $str[$m];
  //   }

  //   return $reversedString;
  // }

  // echo reverseString("moon");

  ?>




  <!-------------- write a php script that insert spcicfies new item in an array in any position --------------->


  <?php

  // $array = [1,2,3,4,5];
  // // $new = "$" ;
  // $position = 2 ;

  // function addItem($arr, $new, $pos){

  //   $firstSection = array_slice($arr, 0, $pos);
  //   $secondSection = array_slice($arr, $pos);

  //   $result = array_merge($firstSection, array($new), $secondSection);

  //   print_r($result);
  //   return ;

  // }

  // echo addItem($array,"$", $position);





  // write a php script to sort the folowing associative array depending on the key value[asc]:

  $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

  // expected output :

  // apple 
  // banana 
  // lemon 
  // orange 


  // sort($fruits);

  // foreach($fruits as $fruit) {

  //   echo $fruit . "<br>";

  // }



  // write a php script to claculate and desplay the average temperature -----------------------------------------------------
  // of the recorded reads, asso the script should display the list of 
  // the five lowest and the five highest temperatures


  // $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 80, 75, 76, 68, 62, 73, 72, 
  //             65, 74, 70, 62, 65, 67, 68, 73, 75, 79, 73];


  // function tempreture($numArr)
  // {
  //   sort($numArr);

  //   $sum = 0;
  //   $lowest = "";
  //   $highest = "";

  //   // calculate the average of the tempretures 
  //   for ($o = 0; $o <= count($numArr); $o++) {
  //     $sum = $sum + $numArr[$o];
  //   }
  //   echo "Average tempreture : " . number_format($sum / count($numArr), 1) . "<br>";

  //   // echo the first five lowst tempretures with no iterations 
  //   for ($i = 0; $i <= count($numArr); $i++) {
  //     if (!str_contains($lowest, $numArr[$i])) {
  //       $lowest .= $numArr[$i] . ",";
  //     }

  //     if (strlen($lowest) >= 15) {
  //       break;
  //     }
  //   }
  //   echo "List of five lowes temperatures : " . $lowest . "<br>";

  //   // echo the last highest temperatures with no iterations 
  //   for ($b = count($numArr) - 1; $b >= 0; $b--) {

  //     if (strlen($highest) >= 15){
  //       break;
  //     } 
  //       $highest .= $numArr[$b] . ",";
  //     }
  //     echo "List of five highest temperature :  ". $highest;
  // }

  // tempreture($numbers);




  // write a php program to mege the floowing two arrays.--------------------------------------------------------------------- 

  // $array1 = array("color" => "red", 2, 4);
  // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

  // $result = array_merge($array1, $array2);

  // print_r($result). "<br>";

  // try to solve it without using built-in function merge !!
  // $tst = [];

  // for($i = 0; $i <= count($array1); $i++){
  //   array_push($tst, $array1[$i]);
  // }

  // for($e = 0; $e <= count($array2); $e++){
  //   array_push($tst, $array2[$e]);
  // }

  // print_r($tst);


  // wirte a php function to change the following array's and conver all the string to upper case------------------------------------ 

  // $colors = array("red", "blue", "white" ,"yellow");

  // function convertUpper($arr)
  // {
  //   $upperArray = [];
  //   for ($p = 0; $p <= count($arr); $p++) {

  //     $upperArray .= "<br>";
  //     $upperArray .= strtoupper($arr[$p]);
  //   }
  //   print_r($upperArray);
  // }

  // convertUpper($colors);


  // ------------------------------------------------------ lower case convert
  // $colors2 = array("RED", "BLUE", "WHITE" ,"YELLOW");

  // function convertlower($arr)
  // {
  //   $upperArray = [];
  //   for ($p = 0; $p <= count($arr); $p++) {

  //     $upperArray .= "<br>";
  //     $upperArray .= strtolower($arr[$p]);
  //   }
  //   print_r($upperArray);
  // }

  // convertlower($colors2);



  // write a php script which desplays all the numbes between 200 and 250---------------------------------------------------
  // that are divisible by 4 ;


  // for($r = 200; $r <= 250; $r++){

  //   if($r % 4 == 0){
  //     echo $r . " ";
  //   }
  // }



  // write a php scripte to get the shorest/longest string length from an array.

  // $words = ["malek", "mohammed", "ali", "omar"];
  // $longest = "";
  // $shortest = $words[0];

  // for ($t = 0; $t < count($words); $t++) {
  //   if (strlen($words[$t]) > strlen($longest)) {
  //     $longest = $words[$t];
  //   }
  // }


  // for ($w = 0; $w < count($words); $w++) {
  //   if (strlen($words[$w]) < strlen($shortest)) {
  //     $shortest = $words[$w];
  //   }
  // }
  // echo "The Longest word inside this array is : ". $longest . "<br>";
  // echo "The Shortest word inside this array is : " .$shortest . "<br>";




  // write a php script that returns the lowest integer in the array that is not 0  ----------------------------------------------------

  // $nums = [9, 8, 7, 10, 0];

  // $lowestInt = $nums[0];

  // for($i = 0; $i < count($nums); $i++){
  //   if($nums[$i] < $lowestInt && $nums[$i] != 0){
  //     $lowestInt = $nums[$i];
  //   }
  // }
  // echo "This is the lowest integer ".$lowestInt ;




  // write a php scirpt to generate unique random 10 numbers within a specific range ---------------------------------------------------


  // $start = 11 ;
  // $end = 20 ;
  // $emptyString = "";

  // for($m = 1; $m <= 200; $m++){
  //   $newNum =rand($start, $end);

  //   if(!(str_contains($emptyString, $newNum ))){
  //     $emptyString .= $newNum ;
  //     // $emptyString .= ",";
      
  //   }
  //   if(strlen($emptyString) >= 60){
  //     break ;
  //   }
  // }

  // echo $emptyString


































































































  ?>





























































































































</body>

</html>