<?php

declare(strict_types=1);

function returnStringOrNull(mixed $a): mixed {

    if($a === 5) :

        return null;

    else :

        return "Hello Darling!";

    endif;

}


var_dump(returnStringOrNull(5));

?>