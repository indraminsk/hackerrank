<?php
//===my===
class Calculator {
    function power($n,$p) {
        try {
            if (($n < 0) || ($p < 0)) {
                throw new Exception('n and p should be non-negative');
            }
            
            $answer = pow($n, $p);
        } catch (Exception $e) {
            $answer = $e->getMessage();
        }
        
        return $answer;
    }
}
//===end===

$myCalculator=new Calculator();
$T=intval(fgets(STDIN));
while($T-->0){
    list($n, $p)  = explode(" ", trim(fgets(STDIN)));
    try{
        $ans=$myCalculator->power($n,$p);
        echo $ans."\n";
    }
    catch(Exception $e){
        echo $e->getMessage()."\n";
    }
}
?>
