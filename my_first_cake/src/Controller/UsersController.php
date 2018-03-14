<?php

	/**
	* 
	*/
	namespace App\Controller;
	use Cake\ORM\TableRegistry;
	use Cake\Controller\Controller;
	use Cake\ORM\Table;
	use Cake\ORM\Query;
	use Cake\ORM\Entity;
	use Cake\Validation\Validator;
    use Cake\Event\Event;
    use App\Controller\AppController;
    use Cake\Auth\FormAuthenticate;
    use Cake\Auth\DefaultPasswordHasher;



	class UsersController extends AppController
	{
		
		
		  public function initialize()
    {
        parent::initialize();
       
       
       
        // $this->loadComponent('Data');//goi DataComponent
        //   $components = array('Data');//k dc để public 
    }
    	// public $helpers = array('First');//goi Firsthelper
		// public $name = "Users";
    	public function login(){
             $this->viewBuilder()->layout('login');
    		//$this->viewBuilder()->setLayout('login');
    		$userTable = TableRegistry::get('UserTbl');
    		$usertable = $userTable->newEntity();
    		if ($this->request->is('post')) {
                //validate
                $data = $this->request->data;
                $user = [];
                $user['username'] = isset($data['username']) ? $data['username'] : null;
                $user['password'] = isset($data['password']) ? $data['password'] : null;

                $user = $userTable->patchEntity($usertable,$user);
                $message =[];
                foreach ($user->errors() as $value) {
                    foreach ($value as $value1) {
                        $message[] = $value1;
            
                    }
                }
                if (!empty($message)) {
                    $this->Flash->error($message);
                } else {
                    $user = $this->Auth->identify();
                    $this->Auth->setUser($user);
                    return $this->redirect('/Users/listUser');
                }




   //              // if ($userTable->save($user)) {
   //              //     echo "chuyển đến xác thực";

   //              //     // return $this->redirect(['controller' => 'Users', 'action' => 'login']);
   //              //     $user = $this->Auth->identify();
   //              //     print_r($user);
   //              //          if ($user) {
   //              //             echo "3<br>";
   //              //             $this->Auth->setUser($user);
   //              //             echo "4<br>";
   //              //             return $this->redirect($this->Auth->redirectUrl());
   //              //             echo "bạn đã đăng nhập thành công";
   //              //         } else {
   //              //             echo "đăng nhập k thành công";
   //              //            // $this->Flash->error(__('Username or password is incorrect'));
   //              //         }
   //              // } else {
   //              //     $message =[];
   //              //     foreach ($user->errors() as $value) {
   //              //         foreach ($value as $value1) {
   //              //             $message[] = $value1;
                
   //              //         }
   //              //     }
   //              //      $this->Flash->error($message);
   //              // }

   //               //Authentication
                
               
            
    			
   //       //     // print_r($message);
   //       //    // $this->Flash->error($message);
           
   //       //    // print_r($message);
   //  				 // // $this->Flash->myError('Sai tên tài khoản hoặc mật khẩu');

   //  		}

    		   
   //  		// $validator = new Validator();
			// //debug($userTable->find()->where(['user_id' => 'aaaaa']));
			// // print_r($this->Data->match());
			// // $this->Data->match();//chay ham match trong DataComponent
			// // $this->render("test1");//chạy hàm helper1 trong FirstHelper ---- bỏ dòng này đi thì nó sẽ in ra kết quả của hàm match trong DataComponent
			// //$this->helpers->helper1();
			//  // $data = $this->Data->match2();//Sử dụng function randd(6),randdom 6 số k cần gán do trong hàm là lệnh echo rồi
   //    		// $this->set("data",$data);
			//  //cái render nào cuối thì content nó sẽ là của cái đấy

			
	  //     }
   //      public function logout(){
            
   //          $this->Auth->logout();
   //          return $this->redirect('/Users/login');

	  //     // public $components = array('Data'); goi ở trong initialize
   //      }
		public function test2(){
        echo "hhjjhjhbj";	
		}

		
		public function listUser(){
			$userTable = TableRegistry::get('UserTbl');
			$result = $userTable->find('all')->select(['username', 'fullname', 'slogan', 'personal_email'])
			->toArray();
			$this->set("result",$result);

		}
		function vidu2(){
		   
 			}
	}
?>