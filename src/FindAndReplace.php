<?php
	 class FindReplace
		{
		 function findReplaceFunction($replaceThis,$replaceWithThis,$sentenceToBeChanged){
			 $answer = str_replace($replaceThis,$replaceWithThis,$sentenceToBeChanged);
			 return $answer;
	}
}
 ?>
