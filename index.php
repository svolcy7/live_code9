<?php

echo "<h1>Happy Halloween</h1>";

// define the funcion
function writeMessage() {
	echo "you are really a nice person <br><br>";
}

// call the function
writeMessage();

function mutiply($num1,$num2){
	$out = $num1 * $num2;
	echo "Mulitplication of the two numbers: $out<br><br>";
}
mutiply(5,7);

$num = 25;
mutiply($num,$num);
echo $num."<br><br>";

#reference
function addFive($num){
	$num += 5;
}

function addSix(&$num){
	$num += 6;
}
$num1 = 15;
addFive($num1);
echo $num1."<br><br>";
addSix($num1);
echo $num1."<br><br>";

function addFunc($num1,$num2){
	$num = $num1 + $num2;
	return $num;
}

$returned_value = addFunc(10,20);
echo "returned value from function : $returned_value <br><br>";

function add_minus($num1,$num2){
	$sum = $num1 + $num2;
	$minus = $num1 - $num2;
	return array($sum,$minus);
}
$return_values = add_minus(10,30);

$cnt = count($return_values);

for ($i=0;$i<$cnt;$i++){
	echo $return_values[$i]." ";
}
echo "<br><br>";

function add_minus2($num1,$num2,&$sum,&$minus){
	$sum = $num1 + $num2;
	$minus = $num1 - $num2;
}
$s = 0;
$m = 0;
echo $s." ".$m."<br><br>";
add_minus2(10,20,$s,$m);

echo $s." ".$m."<br><br>";

function printMe($para = "what is it <br><br>"){
	echo $para;
}

printMe("This is a demo<br><br>");
printMe();

function sayhello(){
	echo "Hello! <br><br>";
}
$function_holder = "printMe";
$function_holder();
?> 




























