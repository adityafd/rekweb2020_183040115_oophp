<?php 

class ContohStatic {
	public static $angka = 1;

	public static function hello() {
		return "Hello!" . self::$angka++ . " kali.";
	}
}

echo ContohStatic::$angka;
echo "<hr>";
echo ContohStatic::hello();
echo "<hr>";
echo ContohStatic::hello();
echo "<hr>";

class Example {
	public static $number = 1;

	public function hi() {
		return "Hi " . self::$number++ . " times. <br>";
	}
}

$obj1 = new Example;
echo $obj1->hi();
echo $obj1->hi();
echo $obj1->hi();

echo "<hr>";

$obj2 = new Example;
echo $obj2->hi();
echo $obj2->hi();
echo $obj2->hi();

?>