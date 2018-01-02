<?php
if ($argc < 2) {
	echo "Usage: php hello.php [name].\n";
	exit(1);
}
$name = $argv[1];
echo "Hello $name\n";
echo "Hello ".$name."\n";
$c = print "<h2>PHP is Fun!</h2>";
$c += print "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
echo "c is $c and is type ";
var_dump($c);
echo "====\n";
echo "Classes\n";
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo "herbie model is $herbie->model\n";
echo var_dump($herbie);
echo "====\n";
echo "Constants\n";
define("GREETINGS", "Hi there. ", true);
echo GREETINGS;
echo Greetings;
echo "\n";
echo "====\n";
echo "Arrays - Indexed";
$a = array("car", 12, 3.14);
echo "a is type ";
var_dump($a);
echo "element 1 is $a[1]\n";
echo "Arrays - Associative";
$age = array("Peter"=>"35", 'Ben'=>"37", "Joe"=>"43");
$age['old sage'] = 'very old';
var_dump($age);
echo "Ben is " . $age['Ben'] . "\n";
foreach($age as $k => $v) {
    echo "Key=" . $k . ", Value=" . $v . "; ";
}
echo "\n";