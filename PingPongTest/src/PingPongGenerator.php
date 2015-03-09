<?php
    class PingPongGenerator
    {
        function makePingPong($input)
        {
            $output = array();
            $count = 1;
            while ($count <= $input){
                if ($count % 3 == 0){
                    array_push($output, 'ping');         
                } else {
                array_push($output, $count);
                }
                ++$count;
            }

            return $output;
        }
    }
?>
