<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong_input()
        //Show user input
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 1;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $output = array(1);
            $this->assertEquals($output, $result);
        }

        function test_makePingPong_countup()
        //Show all numbers from 1 to user input value
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $output = array(1, 2);
            $this->assertEquals($output, $result);
        }

        function test_makePingPong_three()
        //if input is divisible by 3 return ping
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $output = array(1, 2, "ping");
            $this->assertEquals($output, $result);
        }

        function test_makePingPong_five()
        //if input is divisible by 5 return pong
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->makePingPong($input);

            //Assert
            $output = array(1, 2, "ping", 4, "pong");
            $this->assertEquals($output, $result);
        }
    }
?>
