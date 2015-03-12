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
            $score = array(1);
            $this->assertEquals($score, $result);
        }
        function test_scrabbleScoreTwo()
        {
            //Arrange
            $test_scrabble_score_2 = new Scrabble;
            $input_word = "to";

            //Act
            $result = $test_scrabble_score_2->scrabbleScore($input_word);

            //Assert
            $score = array(2);
            $this->assertEquals($score, $result);
        }
    }

?>
