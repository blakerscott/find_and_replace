<?php

	require_once 'src/FindAndReplace.php';

	class FindReplaceTest extends PHPUnit_Framework_TestCase
	{

		function test_findReplaceFunction_oneWord()
		{
		//Arrange
		$test_FindReplace = new FindReplace;
		$replaceThis = 'world';
		$replaceWithThis = 'mars';
		$sentenceToBeChanged = 'Hello world';

		//Act
		$result = $test_FindReplace->findReplaceFunction($replaceThis, $replaceWithThis, $sentenceToBeChanged);

		//Assert
		$this->assertEquals('Hello mars', $result);
		}
	}

?>
