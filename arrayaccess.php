<?php 

class Entry implements ArrayAccess
{

    public $title = "Test";

    /* Methods */

    public function offsetExists(mixed $offset): bool {

        
        if($offset == "content") :
            return true;    
        endif;


        return $offset;


    }
    public function offsetGet(mixed $offset): mixed {

        if($offset == "content") :
            return $this->title;    
        endif;


        return $offset;

    }
    public function offsetSet(mixed $offset, mixed $value): void {
        if($offset == "content") :
            $this->title = $value;    
        endif;
    }
    public function offsetUnset(mixed $offset): void {
       var_dump("offsetUnset: {$offset}");
    }

}

    $entry = new Entry();
    
    $entry['content'] = "test123";
    unset($entry['content']);
    var_dump($entry['content']);

?>