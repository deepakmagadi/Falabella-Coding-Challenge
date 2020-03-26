<?php

class MyClass
{
  public function hello()
  {
    return "world";
  }

public $result =['multiple3' => "", 'multiple5' => "", 'multiple35' =>""]; 

    public  function runLogic(){

        for($i =1; $i <=100;$i++)
        {

            $this->num = $i;
            
            $result['multiple3']  = $this->checkRemainder($i,3);
            $result['multiple5']  = $this->checkRemainder($i,5);
            $result['multiple35'] = $this->checkRemainder35($result['multiple3'],$result['multiple5']);
           
            switch ($result) {
	            case ($result['multiple35'] == 0 ):
	                echo sprintf("%s\n","Linianos");
	                break;
	            case ($result['multiple5'] == 0):
	                echo sprintf("%s\n","IT");
	                break;
	            case ($result['multiple3'] ==0):
	                echo sprintf("%s\n","Linio");
	                break;
	            default:
	                echo sprintf("%s\n",$this->num);
	        }

        }
    }

    function checkRemainder($number,$param )
    {
        return $number % $param;
    }


    function checkRemainder35($number3,$number5)
    {
        return $number3 +  $number5;
    }

    // $obj = new MyClass();
    // echo $obj->runLogic();
    
}

?>