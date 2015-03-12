<?php

    class Scrabble
    {
                function scrabbleScore($input_word)
                {

                    $score = array();
                    $word_split = array();
                    $one = array("o", "t", "a");
                    $two = array ("g", "d");
                    $word_split = str_split($input_word);
                    $tile_one = 0;
                    $tile_two = 0;

                    foreach($word_split as $letter) {
                        if (in_array($letter, $one)) {
                             ++$tile_one;
                             array_push($score, $tile_one);

                        }

                        elseif(in_array($letter, $two)) {
                            $tile_two += 2;
                            array_push($score, $tile_two);

                        }

                    }


                    $final_score = array_sum($score);
                    return $final_score;

               }
    }

?>
