<?php
echo "<h1>String Function in PHP</h1>";
echo "<pre>strlen function</pre>";
echo "Krishna: ".strlen("Krishna");
echo "<pre>strpos function</pre>";
$mystring= "Android PHP";
$find="PHP";
$start=strpos($mystring, $find);
echo $start;
echo "<br>";
$stop=strlen($find);
echo substr($mystring, $start,$stop);
echo "<br>";
echo "<pre>similar_text function</pre>";
echo similar_text("krishna php","krishna java");
echo "<pre>str_pad(string,length,pad_string,pad_type)</pre>";
$str = "I love PHP";
echo str_pad($str,20,"*");
echo "<pre>str_shuffle function: Randomly shuffle all characters of a string</pre>";
echo str_shuffle("Android");
echo "<pre>The str_split() function splits a string into an array.</pre>";
print_r(str_split("PHP"));
echo "<pre>trim rtrim ltrim function</pre>";
echo "Krishna: ".ltrim("       Krishna      ");
echo "<pre>strtolower function</pre>";
echo "KRISHNA: ".strtolower("KRISHNA");
echo "<pre>strtoupper function</pre>";
echo "krishna: ".strtoupper("krishna");
echo "<pre>strcmp function</pre>";
echo "strcmp : ".strcmp("hello","hello demo");
echo "<h1>character of a string Function in PHP</h1>";
echo "ucfirst(): ".ucfirst("krishna")."<br>";//converts the first character of a string to uppercase
echo "lcfirst(): ".lcfirst("KRISHNA")."<br>";//converts the first character of a string to lowercase
echo "ucwords(): ".ucwords("php android")."<br>";//converts the first character of each word in a string to uppercase
echo "<pre>str_word_count() function counts the number of words in a string</pre>";
echo "<b>str_word_count: I love PHP Programming</b>".str_word_count("I love PHP Programming");
echo "<h1>wordwrap() Function in PHP</h1>";//Wrap a string into new lines when it reaches a specific length

$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"<br>");
echo "<h1>The substr_count() function counts the number of times a substring occurs in a string.</h1>";
echo substr_count("Hello world. The world is nice","world")."<br>";
echo "<h1>The strtr() function translates certain characters in a string.</h1>";
echo strtr("Hilla Warld","ia","eo")."<br>";
echo "<h1>The str_repeat() function repeats a string a specified number of times.</h1>";
echo str_repeat("*",10);


echo "<pre>Syntax: substr(string, start,lenght)</pre>";
echo substr("Hello World", 1)."<br>";// ello World
echo substr("Hello World", -1)."<br>";// d
echo substr("Hello World", 1,8)."<br>";// ello Wor
echo substr("Krishna", 0,1)."<br>";// K
echo substr("Krishna", 0,5)."<br>";// Krish
echo substr("Krishna", 0,-1)."<br>";// Krishn
echo substr("Hello World", -10,-2)."<br>";// ello Wor
echo "<pre>Syntax: str_replace(search, replace, subject)</pre>";


echo str_replace("Krishna", "Android",2)."<br>";

$arr = array('blue','red','green','yellow');

print_r($arr);
echo "<br>";
print_r(str_replace("red", "pink", $arr,$i));
echo "<br>";

echo "Replacement: $i";

echo "<br>";
$find = array('hello', 'world');
$replace = array("B");
$arr =array("hello","world","!");
print_r(str_replace($find, $replace, $arr));

echo "<pre>Syntax: substr_replace(search, replace, subject)</pre>";
