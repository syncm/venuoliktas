<?php

class Radar {

    public $date;
public $number;
public $distance;
public $time;


function __construct($date, $number, $distance, $time) {
    $this->date= $date;
    $this->number=$number;
    $this->distance=$distance;
    $this->time=$time;
}
}



function greitis($mas)
{
  $i  =0;
    foreach($mas as $gr)
{

$greitiskmperh[$i] = $gr['distance'] / $gr['time'];

$i++;
}

rsort($greitiskmperh);

$arrlength = count($greitiskmperh);
for($x = 0; $x < $arrlength; $x++) {
    echo round($greitiskmperh[$x], 1),' ', 'km/h';
    echo "<br>";
}
}


$mas= [
    ['date' => '2014-10-25-19:20', 'number' => '519', 'distance' => '110', 'time' => '1' ], 
    ['date' => '2015-11-26-06:20', 'number' => '514', 'distance' => '58', 'time' => '2' ], 
    ['date' => '2014-10-25-19:20', 'number' => '555', 'distance' => '60', 'time' => '1.5' ], 
    ['date' => '2014-10-25-19:20', 'number' => '321', 'distance' => '33', 'time' => '1' ], 
    ];



greitis($mas);


?>