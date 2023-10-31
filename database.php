<?php

$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8",
"blog", 
"mu6EbwxtMrErvdL2"
);

$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

       

?>