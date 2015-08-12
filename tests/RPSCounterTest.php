<?php

    require_once "src/RPS.php";

    class RPSTest extends PHPUnit_Framework_TestCase
    {
        function test_countRPS()
        {
            //Arrange
            $test_RPS = new RPS;
            $input1 = "scissors";
            $input2 = "rock";

            //Act
            $result = $test_RPS->countRPS($input1, $input2);

            //Assert
            $this->assertEquals("Player 1", $result);
        }
    }
?>
