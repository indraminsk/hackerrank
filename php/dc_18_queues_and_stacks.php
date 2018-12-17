<?php
///===my===
class Solution {
    // Write your code here
    private $_steckIndex = 0;
    private $_queueIndex = 0;
    
    private $_steck = [];
    private $_queue = [];
    
    function pushCharacter($value) {
        array_unshift($this->_steck, $value); 
    }
    
    function enqueueCharacter($value) {
        $this->_queue[] = $value;
    }
 
    function popCharacter() {
        $value = $this->_steck[$this->_steckIndex];
        $this->_steckIndex++;
            
        return $value;
    }

    function dequeueCharacter() {
        $value = $this->_queue[$this->_queueIndex];
        $this->_queueIndex++;
            
        return $value;
    }    
}
//===end===

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
    	
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>
