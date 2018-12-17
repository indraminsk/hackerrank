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
	public function getHeight($root){
    $heightR = 0;    
    $direct = $root->right;
    while ($direct) {
      $direct = $direct->right;
      $heightR++;
    }
    
    $heightL = 0;
    $direct = $root->left;
    while ($direct) {
      $direct = (is_null($direct->left)) ? $direct->right : $direct->left;
      $heightL++;
    }
    
    return ($heightR > $heightL) ? $heightR : $heightL;
  }
  //===end===
}

$myTree=new Solution();
$root=null;
$T=intval(fgets(STDIN));
while($T-->0){
    $data=intval(fgets(STDIN));
    $root=$myTree->insert($root,$data);
}
$height=$myTree->getHeight($root);
echo $height;
?>
    
