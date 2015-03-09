<?php
    class PingPongGenerator
    {
        function makePingPong($input)
        {
            $output = array();
            $count = 1;
            while ($count <= $input){
                array_push($output, $count);
                ++$count;
            }

            return $output;
        }
    }
?>
