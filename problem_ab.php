<?php

	
	$_fp = fopen('Problem_AB_test.txt', 'r');
	$file = array();

	$price = array(

		'A' => 1,
		'B' => 4,
		'C' => 4,
		'D' => 2,
		'E' => 2,

		);

	while(!feof($_fp))
	{
		array_push($file, fgets($_fp));
	}
	fclose($_fp);

	for($i=0; $i< sizeof($file);$i++)
	{
		$file[$i] = strtoupper($file[$i]);
	}		


	if(sizeof($file) > 31)
	{
		print "\nToo long\n";
	}

	if(sizeof($file) <= 0 )
	{
		print "\nError\n";
	}


	for($i=0; $i< sizeof($file);$i++)
	{

		$pattern = "BCDE";
		$size = sizeof(split($pattern, $$file[$i]));
		if($size > 1)
		{
			print "\nErr\n";
		}


		$pattern = "BCED";
		$size = sizeof(split($pattern, $$file[$i]));
		if($size > 1)
		{
			print "\nErr\n";
		}


		$pattern = "CBED";
		$size = sizeof(split($pattern, $$file[$i]));
		if($size > 1)
		{
			print "\nErr\n";
		}

		$pattern = "CBDE";
		$size = sizeof(split($pattern, $$file[$i]));
		if($size > 1)
		{
			print "\nErr\n";
		}

		$pattern = "DECB";
		$size = sizeof(split($pattern, $$file[$i]));
		if($size > 1)
		{
			print "\nErr\n";
		}

		$pattern = "DEBC";
		$size = sizeof(split($pattern, $$file[$i]));
		if($size > 1)
		{
			print "\nErr\n";
		}	
	}	

	if(sizeof($file) <= 31 )
	{
		print "\nOk\n";
	}


?>