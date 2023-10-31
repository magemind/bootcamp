<?php


$navigation = [
    [
        'title' => 'Titel 1', 
         'desc' => 'Desc 1'
    ],
    [
        'title' => 'Titel 2', 
         'desc' => 'Desc 2'
    ]
];


foreach($navigation AS $reiter) :



endforeach;




?>



<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

<?php
  
foreach($navigation AS $reiter) :

    echo "  <li><a>Menu</a><ul>";

    foreach($reiter AS $submenu) :
        echo "  <li><a href='#'>{$submenu}</a></li>";
    endforeach;

    echo '</ul></li>';

endforeach;

echo "</ul>";


?>

    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>



