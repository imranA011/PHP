
<?php 

echo "Hello World";
echo "</br>";

var_dump("Hello World");
echo "</br>";

echo strlen('Hello World');
echo "</br>";

echo strrev('Hello World');
echo "</br>";

echo strpos('Hello World', 'world');
echo "</br>";

echo str_word_count('Hello World');
echo "</br>";

echo str_replace('World', 'Imran', 'Hello World');
echo "</br>";

print_r (explode('l', 'Hello World'));
echo "</br>";

echo implode(['Dhaka ', 'is ', 'our ', 'capital']);
echo "</br>";

echo md5('hello');
echo "</br>";

echo sha1('hello');
echo "</br>";

echo "<pre>";
print_r (array("1"=>"dhaka", "12"=>"khulna", "sylhet"));
echo "</pre>";
echo "</br>";

$city = array(
            array('bangladeh', 'india', 'usa'),
            array('dhaka', 'delhi', 'newyork')
        ); 
print_r ($city[0]); 
echo "</br>"; 
echo $city[1][2];
echo "</br>"; 
echo append();
echo "</br>";  

$num = 20.5;
var_dump (is_int($num));
echo "</br>"; 
echo (int)$num;
echo "</br>";
echo "</br>";

echo PI(); 
echo "</br>";
var_dump (is_finite(PI()));
echo "</br>";


































?>


