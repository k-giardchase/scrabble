<?php

    require_once "src/MyProjectClass.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_myFunction_firstTest()
        {
            //Arrange
            $test_MyProjectClass = new MyProjectClass;

            //Act
            $result = $test_MyProjectClass->myFunction();

            //Assert
            $this->assertEquals( /* expectation */, $result);
        }
    }

?>
