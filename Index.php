<?php
require 'MyClass.php';
class Index 
{
  public function execute()
  {
     $obj = new MyClass();
     echo $obj->runLogic();
  }

   
    
}
 $obj = new Index();
    echo $obj->execute();

?>