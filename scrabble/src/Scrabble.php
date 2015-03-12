<?php

    class Scrabble
    {
                function scrabbleScore($input_word)
                {

                    $score = array();
                    $word_split = array();
                    $one = array("s", "e", "i", "o", "u", "l", "n", "r", "a", "t");
                    $two = array ("g", "d");
                    $three = array("b", "c", "m", "p");
                    $word_split = str_split($input_word);
                    $tile = 0;


                    foreach($word_split as $letter) {
                        if (in_array($letter, $one)) {
                             ++$tile;
                             array_push($score, $tile);
                             $tile = 0;
                        }

                        elseif(in_array($letter, $two)) {
                            $tile += 2;
                            array_push($score, $tile);
                            $tile = 0;
                        }

                        elseif(in_array($letter, $three)) {
                            $tile += 3;
                            array_push($score, $tile);
                            $tile = 0;
                        }


                    }


                    $final_score = array_sum($score);
                    return $final_score;

               }
    }

?>
