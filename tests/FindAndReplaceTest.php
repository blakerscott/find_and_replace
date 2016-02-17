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

		function test_findReplaceFunction_moreThanOneWord()
		{
		//Arrange
		$test_FindReplace = new FindReplace;
		$replaceThis = 'world';
		$replaceWithThis = 'mars';
		$sentenceToBeChanged = 'Hello world what such a beautiful world';

		//Act
		$result = $test_FindReplace->findReplaceFunction($replaceThis, $replaceWithThis, $sentenceToBeChanged);

		//Assert
		$this->assertEquals('Hello mars what such a beautiful mars', $result);
		}

		function test_findReplaceFunction_withinWord()
		{
		//Arrange
		$test_FindReplace = new FindReplace;
		$replaceThis = 'world';
		$replaceWithThis = 'mars';
		$sentenceToBeChanged = 'Hello worldwide what such a beautiful world';

		//Act
		$result = $test_FindReplace->findReplaceFunction($replaceThis, $replaceWithThis, $sentenceToBeChanged);

		//Assert
		$this->assertEquals('Hello marswide what such a beautiful mars', $result);
		}
	}

?>
