<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class DataComponent extends Component
{

    public function math()
    {
    	$a=2;
    	$b=3;
        return $a + $b;
    }
}
?>