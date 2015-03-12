<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scrabbleScore_1()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input_word = "a";

            //Act
            $result = $test_Scrabble->scrabbleScore($input_word);

            //Assert
            $this->assertEquals( 1, $result);
        }
    }

?>
