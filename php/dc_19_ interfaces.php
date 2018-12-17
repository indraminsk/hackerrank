<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}

//===my===
class Calculator implements AdvancedArithmetic
{
    public function divisorSum($n) {
        $divisors = [];
        foreach (range(1,$n) as $divisor) {
            if (empty($n % $divisor)) {
                $divisors[] = $divisor;
            }
        }
                
        return array_sum($divisors);
    }
}
//===end===

$n=intval(fgets(STDIN));
$myCalculator=new Calculator();
if($myCalculator instanceof AdvancedArithmetic)//checking if Calculator has implemented AdvancedArithemtic
{
    $sum=$myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n".$sum;
}
else
{
    echo "Wrong answer";// You will get this output if you dont implement
}
?>
