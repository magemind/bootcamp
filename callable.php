<?php

class CallableEntry
{


    function __invoke($x) {

        var_dump("Parameter wurde entgegengenommen: {$x}");

    }


    function test($fn) {
        $fn($entry);
    }

}


$callable = new CallableEntry();
echo $callable("123");


?>