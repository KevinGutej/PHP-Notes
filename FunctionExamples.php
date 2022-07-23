
<html>
<?php // **** FUNCTIONS **** //
function multiplicate(int $a, int $b)
{
    return $a * $b;
}
var_dump(multiplicate(2, 22));

function add(int $a, int $b)
{
    return $a * $b;
}
var_dump(add(7, 56));

function takeaway(int $a, int $b)
{
    return $a * $b;
}
var_dump(takeaway(15, 5));

function divide(int $a, int $b)
{
    return (float)$a * $b;
}
var_dump(divide(4, 7));

function power(int $a, int $b)
{
   return(pow($a,$b));
}
var_dump(power(3, 2));

//==================================================================================================================================================

function CurrentTime():void
{
    $TheCurrentTime = date("G:i:s");
    echo $TheCurrentTime;
}

CurrentTime();

$number = 5;

function Square(int $number):int
{
    $result = $number * $number;
    return $result;
}
$result1 = Square($number);
echo $result1;

$a = 2;
$b = 3;
$c = 1;

function adding(int $a, int $b, int $c):int
{
    return $a + $b + $c;
}
echo adding($a,$b,$c);

$numbers = [2,3,4,5,6,7,12];

function minimum(array $array):int
{
    $min = 100;
    foreach($array as $numbers)
    {
        if($numbers <= $min)
        {
            $min = $numbers;
        }
    }
    return $min;
}
echo minimum($numbers);


//==================================================================================================================================================








?>

</html>