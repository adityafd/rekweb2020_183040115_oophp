<?php 

define('NAMA', 'Aditya FD'); // Tidak bisa dimasukkan ke dalam Class.
echo NAMA;

echo "<br>";

const UMUR = 20; // Bisa dimasukkan ke dalam Class.
echo UMUR;

echo "<hr>";

class Test {
	//define('NAME', 'Fatahajaya');
	const NAME = "Fatahajaya";
}

echo Test::NAME;

echo "<hr>";

//Magic Constant
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";

function fungsi() {
	return __FUNCTION__;
}

echo fungsi();
echo "<br>";

class Kelas {
	public $k = __CLASS__;
}

$obj = new Kelas;
echo $obj->k;
echo "<br>";

// echo __TRAIT__;
// echo "<br>";
// echo __METHOD__;
// echo "<br>";
// echo __NAMESPACE__;
// echo "<br>";

?>