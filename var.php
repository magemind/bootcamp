<?php

class Entry {

    public $title = "Hallo Welt";

    public function testMethod() {
        var_dump("testMethod() wurde ausgeführt");
    }



}

$entry = new Entry();
$name = "testMethod";
var_dump($entry->$name());


?>