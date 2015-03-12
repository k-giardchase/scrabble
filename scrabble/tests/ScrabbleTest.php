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
            $final_score = 1;
            $this->assertEquals($final_score, $result);
        }
        function test_scrabbleScoreTwo()
        {
            //Arrange
            $test_scrabble_score_2 = new Scrabble;
            $input_word = "go";

            //Act
            $result = $test_scrabble_score_2->scrabbleScore($input_word);

            //Assert
            $final_score = 3;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabbleScoreThree()
        {
            //Arrange
            $test_scrabble_score_3 = new Scrabble;
            $input_word = "bad";

            //Act
            $result = $test_scrabble_score_3->scrabbleScore($input_word);

            //Assert
            $final_score = 6;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabbleScoreFour()
        {
            //Arrange
            $test_scrabble_score_4 = new Scrabble;
            $input_word = "home";

            //Act
            $result = $test_scrabble_score_4->scrabbleScore($input_word);

            //Assert
            $final_score = 9;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabbleScoreFive()
        {
            //Arrange
            $test_scrabble_score_5 = new Scrabble;
            $input_word = "steak";

            //Act
            $result = $test_scrabble_score_5->scrabbleScore($input_word);

            //Assert
            $final_score = 9;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabbleScoreEight()
        {
            //Arrange
            $test_scrabble_score_8 = new Scrabble;
            $input_word = "jaguar";

            //Act
            $result = $test_scrabble_score_8->scrabbleScore($input_word);

            //Assert
            $final_score = 14;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabbleScoreTen()
        {
            //Arrange
            $test_scrabble_score_10 = new Scrabble;
            $input_word = "qualude";

            //Act
            $result = $test_scrabble_score_10->scrabbleScore($input_word);

            //Assert
            $final_score = 17;
            $this->assertEquals($final_score, $result);
        }

        function test_scrabbleScoreCaps()
        {
            //Arrange
            $test_scrabble_score_caps = new Scrabble;
            $input_word = "CrAzY";

            //Act
            $result = $test_scrabble_score_caps->scrabbleScore($input_word);

            //Assert
            $final_score = 19;
            $this->assertEquals($final_score, $result);
        }

        



    }

?>
