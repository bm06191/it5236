<?php

	if(empty($_POST['textarea'])){
		echo "<br/> Please input text.";
	}else{
		//Tests if variable pulls from the textarea
		$string_typed = $_POST['textarea'];
		echo ('The text is: ' . $string_typed. '<br/>');
		
		//Puts the typed text into an array
		$exploded_string = explode(" ", $string_typed);
		
		/*
		//Tests if the text is made into an array
		print_r($exploded_string);
		*/
		
		//Counts how many objects in the array
		$word_count = count($exploded_string);
		echo ('<br/>Total Number of Words: ' . $word_count. '<br/>');
		
		//Removes spaces from the text
		$replaced_string = preg_replace("/[^A-Za-z]/","", $string_typed);
		
		//Counts number of characters in the replaced text
		$char_count = strlen($replaced_string);
		echo ('<br/>Total Number of Characters: ' . $char_count. '<br/>');
	}
?>