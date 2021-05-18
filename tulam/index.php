<?php
include_once 'Dancer.php';
$maleArr = [];
$femaleArr = [];
$male1 = new Dancer('thanh1', 'male');
$male2 = new Dancer('thanh2', 'male');
$male3 = new Dancer('thanh3', 'male');
$male4 = new Dancer('thanh4', 'male');

$female1 = new Dancer('nguyen1', 'female');
$female2 = new Dancer('nguyen2', 'female');
$female3 = new Dancer('nguyen3', 'female');
$female4 = new Dancer('nguyen1', 'female');
$female5 = new Dancer('nguyen2', 'female');
$female6 = new Dancer('nguyen3', 'female');


$queueMale = new SplQueue();
$queueMale->enqueue($male1);
$queueMale->enqueue($male2);
$queueMale->enqueue($male3);
$queueMale->enqueue($male4);


$queueFemale = new SplQueue();
$queueFemale->enqueue($female1);
$queueFemale->enqueue($female2);
$queueFemale->enqueue($female3);
$queueFemale->enqueue($female4);
$queueFemale->enqueue($female5);
$queueFemale->enqueue($female6);


$j = 1;
for ($i = 1; $i < $queueFemale->count() || $i < $queueMale->count(); $i) {
    echo 'Cặp ' . $j . ' : ' . $queueMale->dequeue()->getName() . " - " . $queueFemale->dequeue()->getName() . "<hr>";

    if ($queueMale->count() == 0 || $queueFemale->count() == 0) {
        if ($queueFemale->count() < $queueMale->count()) {
            echo $queueMale->count() . " nam đang chờ" . '<br>';
        } else {
            echo $queueFemale->count() . " nữ đang chờ" . '<br>';
            $name = $queueFemale->current();
        }
    }
    $j++;
}

