<?php 
 namespace App\Controller;
    use App\Controller\AppController;
    /**
    *  
    */
    class UsersController extends AppController
    {
     public $name = "Users";
     public function first(){
         $sql = "Select * From books";
          $data = $this->Book->query($sql);
          $this->set("data" , $data);
     }
    }
?>