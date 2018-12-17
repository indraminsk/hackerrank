<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{            
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }

  //===my===
  public function parseNode($left, $right, $row, &$values) {
    //var_dump($row, $left, $right);
    //die();
    if ($left) {
      $values[$row][] = $left->data;
    }
    
    if ($right) {
      $values[$row][] = $right->data;
    }
    
    if ($left->left || $left->right) {
      $this->parseNode($left->left, $left->right, $row + 1, $values);
    }

    if ($right->left || $right->right) {
      $this->parseNode($right->left, $right->right, $row + 1, $values);
    }
    
    return $values;
  }

  public function levelOrder($root){
    $values[0][] = $root->data;    
    $values = $this->parseNode($root->left, $root->right, $row + 1, $values);
    
    $result = '';
    foreach ($values as $row) {
      $result = $result . ' ' . implode(' ', $row);
    }
    
    $result = trim($result);
    printf("$result\n");
  }
  //===my===
}

$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$myTree->levelOrder($root);
?>
    
