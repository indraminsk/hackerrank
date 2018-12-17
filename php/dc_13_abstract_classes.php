<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//===my===
class MyBook extends Book
{
    protected $price;
    
    public function __construct($title,$author,$price) {
        parent::__construct(trim($title),trim($author));
        
        $this->price = trim($price);
    }
    
    public function display() {
        printf("Title: $this->title\nAuthor: $this->author\nPrice: $this->price");
    }
}
//===end===

$title=fgets(STDIN);
$author=fgets(STDIN);
$price=intval(fgets(STDIN));
$novel=new MyBook($title,$author,$price);
$novel->display();

?>
