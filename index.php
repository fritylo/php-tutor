<?php

$a = 5;
$b = 3;

$a = 2; ?>


<?php echo $a ?>
<?= $a ?>

<?php echo $a;

if ($a === '2') {
    echo 'a = string';
} else {
    echo 'a = not string';
}

var_dump($a);

echo 'For<br>';
for ($i = 0; $i < 10; $i++) {
    echo 'i = ' . $i . '<br>'; // ' "
    echo "i = $i<br>";
}

echo 'While<br>';
$i = 0;
while ($i < 10) {
    echo "i = $i<br>";
    $i++;
}

echo 'Foreach<br>';

$arr = [1,2,3,4,5,6,7,8,9];
$arr = [
    1 => 10,
    'abc' => 20,
    3 => 30,
];

var_dump($arr);
foreach ($arr as $item) {
    echo "i = $item<br>";
}
foreach ($arr as $i => $item) {
    echo "i = $i :: $item<br>";
}

function foobar($a, $b, $c) {
    global $arr;
    $arr;
    return $a + $b + $c;
}

echo '<br> FooBar: ' . foobar(1, 2, 3) . '<br>';

var_dump(__DIR__);

//require __DIR__ . '/page_log.php';
require_once __DIR__ . '/page_log.php';
//include __DIR__ . '/page_log.php';
//include_once __DIR__ . '/page_log.php';

var_dump($arr);

$foobar = function (int $a, int $b, int $c) use (&$arr) {
    page_log("\$a = $a");
    page_log("\$b = $b");
    page_log("\$c = $c");

    var_dump($arr);
    $arr['abc'] = 1000;
    var_dump($arr);

    return $a + $b + $c;
};

$foobar(1, 2, 3);

var_dump($arr);

function array_foreach(array $arr, callable $callback) {
    for ($i = 0; $i < count($arr); $i++) {
        $callback($arr[$i], $i, $arr);
    }
}

array_foreach([1,2,3], function ($item, $i, $arr) {
    page_log("\$item = {$item}");

    if ($i === count($arr) - 1) {
        echo '<br>';
    }
});

function log_array($item, $i, $arr) {
    page_log("\$item = {$item}");

    if ($i === count($arr) - 1) {
        echo '<br>';
    }
}

'log_array'();

array_foreach([1,2,3], 'log_array');

?>