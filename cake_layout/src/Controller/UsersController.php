<?php 
 namespace App\Controller;
    use App\Controller\AppController;
     use Cake\ORM\TableRegistry;
     use Cake\Routing\Route;
     use Cake\ORM\Entity;
     use Cake\Validation\Validator;
       use Cake\Utility\Security;
    /**
    *  
    */
    class UsersController extends AppController
    {
      public $name = "Users";

       public function initialize(){
      // 	$this->loadComponent('Data');
      // 	 $components = array('Data');
       }
    

    // public function login(){
    //          $this->viewBuilder()->layout('login');
    // 		//$this->viewBuilder()->setLayout('login');
    // 		// $userTable = TableRegistry::get('UserTbl');
    // 		// $usertable = $userTable->newEntity();
    // 		// if ($this->request->is('post')) {
    //   //           //validate
    //   //           $data = $this->request->data;
    //   //           $user = [];
    //   //           $user['username'] = isset($data['username']) ? $data['username'] : null;
    //   //           $user['password'] = isset($data['password']) ? $data['password'] : null;

    //   //           $user = $userTable->patchEntity($usertable,$user);
    //   //           $message =[];
    //   //           foreach ($user->errors() as $value) {
    //   //               foreach ($value as $value1) {
    //   //                   $message[] = $value;
    //   //               }
    //   //           }
    //   //           print_r($message);die;
    //   //           if (!empty($message)) {
    //   //               $this->Flash->error($message);
    //   //           } else {
    //   //               // $user = $this->Auth->identify();
    //   //               // $this->Auth->setUser($user);
    //   //               // return $this->redirect('/Users/listUser');
    //   //           }
    //   //  		}
    //  }

      public function login1(){
      		$this->viewBuilder()->layout('login1');
      		// return $this->redirect('/Users/data1');
      		//echo "dbcbskjvk";die;
      }

     public function ex(){

     }

     public function profile(){

     }

     public function data(){
     		$userTable = TableRegistry::get('UserTbl');
			$result = $userTable->find('all')->select(['user_id', 'username', 'password'])->toArray();
			
			$this->set("result",$result);
     }

     public function data1(){
     		$userTable = TableRegistry::get('UserTbl');
			$result = $userTable->find('all')->select(['user_id', 'username', 'password'])->toArray();
			//print(result);
			$this->set("result",$result);

          // $data = $this->User->find_data();
          // $this->set('data' , $data);
     }
     public function testComponent(){

    	 $q = $this->Data->math();
    	 $this->set("q123",$q);
 	}
     }
?>