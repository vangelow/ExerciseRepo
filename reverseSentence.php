<?php

function reverser(string $sentence): string {
	$arrayOFWords = explode(' ', $sentence);
	$reversedArray = [];
	foreach ($arrayOFWords as $word) {
		$reversedWord = strrev($word);
		$reversedArray[] = $reversedWord;
	}
	return implode(' ', $reversedArray);
}

echo reverser('Hello, there');