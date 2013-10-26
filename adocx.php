<?php

$argv;
 $operators = array(
 	'+' =>'ADD',
 	'-'=>'SUBTRACT',
 	'&'=>'AND',
 	'|'=>'OR',
 	'~'=>'NOT',
 	'X'=>'XOR',
 );



 function bitADD($hex1,$hex2)
 {
 	$value = hexdec($hex1) + hexdec($hex2);
 	if(dechex($value) > dechex('FFFF'))
 	{
 		return "FFFF";
 	}
 	else
 	{
 		return dechex($value);
 	}
 }

  function bitSUB($hex1, $hex2)
 {
 	if($hex2 > $hex1)
 	{
 		return "0000";
 	}
 	$value = hexdec($hex1) - hexdec($hex2);

 	return dechex($value);
 }

 function bitNOT($hex1)
 {
 	$hex1 = base_convert(hexdec($hex1), 10, 2);
 	
 	$hex1 = str_split($hex1);
 	
 	$temp = "";
 	for($i=0;$i < sizeof($hex1); $i++)
 	{
 		if($hex1[$i] == "0")
 		{
 			$temp .= "1";
 		}
 		else
 		{
 			$temp .= "0";
 		}
 	}

 	return $temp;	
 }

 function bitAND($hex1,$hex2)
 {
 	 $hex1 = base_convert(hexdec($hex1), 10, 2);
 	 $hex2 = base_convert(hexdec($hex2), 10, 2);
 	 
 	 return ($hex1 & $hex2);	 
 }

function bitOR($hex1, $hex2)
{
	$hex1 = base_convert(hexdec($hex1), 10, 2);
 	$hex2 = base_convert(hexdec($hex2), 10, 2);

 	return ($hex1 | $hex2);

 }

 function bitXOR($hex1, $hex2)
 {
 	$hex1 = base_convert(hexdec($hex1), 10, 2);
 	$hex2 = base_convert(hexdec($hex2), 10, 2);
 	$hex1 = str_split($hex1);
 	$hex2 = str_split($hex2);

 	$temp = "";
 	for($i=0;$i<sizeof($hex1);$i++)
 	{
 		if($hex1[$i] == $hex2[$i])
 		{
 			$temp .= "0";
 		}

 		else
 		{
 			$temp .= "1";
 		}
 	}

 	return $temp;

 }

 function process($argv,$operators)
 {

 	if($operators[$argv[sizeof($argv)-1]] == 'ADD')
 	{
 		print "\n".bitADD($argv[sizeof($argv)-2],$argv[sizeof($argv)-3])."\n";
 	}
 	if($operators[$argv[sizeof($argv)-1]] == 'SUBTRACT')
 	{
 		print "\n".bitSUB($argv[sizeof($argv)-2],$argv[sizeof($argv)-3])."\n";
 	}
 	if($operators[$argv[sizeof($argv)-1]] == 'NOT')
 	{
 		print "\n".dechex(bindec(bitNOT($argv[sizeof($argv)-2])))."\n";
 	}
 	if($operators[$argv[sizeof($argv)-1]] == 'AND')
 	{
 		print "\n".dechex(bindec(bitAND($argv[sizeof($argv)-2],$argv[sizeof($argv)-3])))."\n";
 	}

 	if($operators[$argv[sizeof($argv)-1]] == 'OR')
 	{
 		print "\n".dechex(bindec(bitOR($argv[sizeof($argv)-2],$argv[sizeof($argv)-3])))."\n";
 	}
 	if($operators[$argv[sizeof($argv)-1]] == 'XOR')
 	{
 		print "\n".dechex(bindec(bitXOR($argv[sizeof($argv)-2],$argv[sizeof($argv)-3])))."\n";
 	}
 	if(!array_key_exists($argv[sizeof($argv)-1],$operators))
 	{
 		print "\nERROR\n";
 	}
 }



process($argv,$operators);





?>