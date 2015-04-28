<?php
    class PingPongGenerator
    {
        function makePingPong($input)
        {
            $output = array();
            $count = 1;
            while ($count <= $input){
                if ($count % 15 == 0) {
                    array_push($output, 'pingpong');
                } elseif ($count % 3 == 0) {
                    array_push($output, 'ping');
                } elseif ($count % 5 == 0) {
                    array_push($output, 'pong');
                } else {
                    array_push($output, $count);
                }
                ++$count;
            }

            return $output;
        }
    }
?>
