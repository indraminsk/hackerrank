<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}

class Solution{
    //===my===
    private $headItem;
    private $lastItem;

    function insert($head,$data){
        $n = new Node($data);
        
        if (!empty($head)) {
            $this->lastItem->next = $n;
        } else {
            $this->headItem = $n;
        }
        
        $this->lastItem = $n;
        
        return $this->headItem;
    }
    //===end===
    
    function display($head){
        $start=$head;
        while($start){
            echo $start->data,' ';
            $start=$start->next;
        }
    }
}
$T=intval(fgets(STDIN));
$head=null;
$mylist=new Solution();
while($T-->0){
    $data=intval(fgets(STDIN));
    $head=$mylist->insert($head,$data);
}
$mylist->display($head);
?>
