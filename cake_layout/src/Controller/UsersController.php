<?php 
 namespace App\Controller;
  use Cake\Controller\Controller;
    use App\Controller\AppController;
     use Cake\ORM\TableRegistry;
     use Cake\Routing\Route;
      use Cake\ORM\Table;
     use Cake\ORM\Entity;
     use Cake\Validation\Validator;
     use Cake\Utility\Security;
     use Cake\Auth\FormAuthenticate;
     use Cake\Auth\DefaultPasswordHasher;
     use Cake\Event\Event;
     use Cake\ORM\Query;
     use Cake\Mailer\Email;

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
	public function login1()
    {
    // $this->viewBuilder()->layout('login1');
    //   $userTable = TableRegistry::get('UserTbl');
    //   $usertable = $userTable->newEntity();
    //   if ($this->request->is('POST')) {

    //             $data = $this->request->data;
          
    //             $user = [];
    //             $user_id_get = isset($data['username']) ? $data['username'] : null;
    //             $user['username'] = isset($data['username']) ? $data['username'] : null;
    //             $user['password'] = isset($data['password']) ? $data['password'] : null;

    //             $user = $userTable->patchEntity($usertable,$user);
    //             $message =[];
    //             foreach ($user->errors() as $value) {
    //                 foreach ($value as $value1) {
    //                     $message[] = $value1;
            
    //                 }
    //             }
    //             if (!empty($message)) {
    //                 $this->Flash->error($message);
    //             } else {
       
    //                 $user = $this->Auth->identify();

    //                 $this->Auth->setUser($user);
    //                 return $this->redirect('/Users/data');
    //             }
    //   	}
      }
    	// $this->viewBuilder()->setLayout('authlogin');
    	//  $userTable = TableRegistry::get('UserTbl');
     //    if ($this->request->is('post')) {
     //    	$data = $this->request->data;
     //    	$user = [];
     //    	$user['username'] = isset($data['username']) ? $data['username'] : null;
     //    	$user['password'] = isset($data['password']) ? $data['password'] : null;
	    //     // $user = $userTable->patchEntity($usertable,$user);
     //        $user = $this->Auth->identify();
     //        print_r($user);die;
            	
     //         if ($user) {
             	
     //            $this->Auth->setUser($user);
     //            return $this->redirect('/Users/data1');
     //         }
     //         $this->Flash->error('Your username or password is incorrect.');
     //    }
     public function ex(){

     }
      // public function login1(){
      // 		$this->viewBuilder()->layout('login1');
      // 		 // return $this->redirect('/Users/data');
      // 		//echo "dbcbskjvk";die;
      // }

     public function profile(){

     }
     public function data(){
     	//khai bao model
 		$userTable = TableRegistry::get('UserTbl');
 		$groupTable = TableRegistry::get('GroupTbl');
 		$usergrTable = TableRegistry::get('UserGroupTbl');
 		$roleTable = TableRegistry::get('RoleMst');
 		$uerolTable = TableRegistry::get('UserRoleTbl');
 		
		//lay toan bo danh sach vi tri
		$role = $roleTable->find('list', ['keyField' => 'role_id', 'valueField' => 'value'])->toArray();
		//lay toan bo danh sach nhom
        $group = $groupTable->find('list', ['keyField' => 'group_id', 'valueField' => 'name'])->toArray();
        //lay du lieu
     	$result1 = $userTable->find('all')
        ->select([
            'UserTbl.user_id',
            'UserTbl.personal_email',
            'UserTbl.fullname',
            'UserTbl.slogan',
            'UserRoleTbl.role_id',
            'UserGroupTbl.group_id'
        ])
        ->join([
            [
            'table' => 'user_group_tbl',
            'alias' => 'UserGroupTbl',
            'type' => 'LEFT',
            'conditions' => 'UserTbl.user_id= UserGroupTbl.user_id' ,
            ],
            [
            'table' => 'user_role_tbl',
            'alias' => 'UserRoleTbl',
            'type' => 'LEFT',
            'conditions' => 'UserRoleTbl.user_id = UserTbl.user_id',
            ]
        ])->toArray();
		$this->set("data",$result1);
		$this->set("role",$role);
		$this->set("group",$group);
     }
     public function edit($id){
		$userTable = TableRegistry::get('UserTbl');
		$data = $userTable->find('all')->select(['username','password','fullname','personal_email','slogan','user_id'])->where(['user_id' => $id])->first();
		$this->set("data",$data);
		if(isset($this->request->getData()['update'])){
	        $data= $this -> request -> data;
	        $user ['username']  = isset($data['username']) ? $data['username'] :null;
	        $user['password']= isset($data['password']) ? $data['password']:null;
	        $user['personal_email']=isset($data['personal_email']) ? $data['personal_email']:null;
	        $user['fullname']=isset($data['fullname'])? $data['fullname']:null;
	        $user['slogan']=isset($data['slogan']) ? $data['slogan']:null;
	        $user['user_id'] = isset($data['user_id'])? $data['user_id'] : '';
	        
	        $query=$userTable->query()->update()
	         ->set(['username'=>$user['username']])
	         ->set(['password'=>$user['password']])
	         ->set(['personal_email'=>$user['personal_email']])
	         ->set(['fullname'=>$user['fullname']])
	         ->set(['slogan'=>$user['slogan']])
	        ->where(['user_id'=>$user['user_id']])->execute();
	        return $this->redirect('/Users/data');
		}
	}
     public function delete($id){
     	$usertbl = TableRegistry::get('UserTbl');
     	$de = $usertbl->get($id);
     	$usertbl->delete($de);
     	return $this->redirect('/Users/data');
     }
     public function add(){
     	$userTable = TableRegistry::get('UserTbl');
     	$roleTable = TableRegistry::get('RoleMst');
     	$groupTable = TableRegistry::get('GroupTbl');
     	$userGroupTbl = TableRegistry::get('UserGroupTbl');
     	$userRoleTbl = TableRegistry::get('UserRoleTbl');
     	$group = $groupTable->find('all')->select(['group_id', 'name'])->toArray();
     	$role = $roleTable->find('all')->select (['role_id', 'value'])->toArray();
		$user =  $userTable -> newEntity (); 
			 		$this->set("group",$group);
			 $this->set("role",$role);

		 $usergr = $userGroupTbl->newEntity();
		 $userrol = $userRoleTbl->newEntity();
		if ($this->request->is('POST')) {
			$data = $this ->request->data;
			$user['username'] = isset($data['username']) ? $data['username'] : null;
			$user['password'] = isset($data['password']) ? $data['password'] : null;
			$user['personal_email'] = isset($data['personal_email']) ? $data['personal_email'] : null;
			$user['fullname'] = isset($data['fullname']) ? $data['fullname'] : null;
			$user['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
			$user['slogan'] = isset($data['slogan']) ? $data['slogan'] : null;
			$userTable->patchEntity($user,$data);
			if($userTable->save($user)){
				//get user_id
				$user1 = $userTable->find('all')-> select(['user_id'])->limit(1)->order(['create_time'=>'DESC'])->toArray();

				//save user group
				$usergr['group_id'] = isset($data['selgroup']) ? $data['selgroup'] : null;
				$usergr['user_id']= $user1['0']['user_id'];
				$userGroupTbl->save($usergr);
				//

				//save user role
				$userrol['role_id'] = isset($data['selrole']) ? $data['selrole'] : null;
				$userrol['user_id'] = $user1['0']['user_id'];
				$userRoleTbl->save($userrol);
				//
				return $this->redirect('/Users/data');
			}
			
		}
	}

  //    public function listUser(){
		// $userTable = TableRegistry::get('UserTbl');
  //    	$groupTable = TableRegistry::get('GroupTbl');
  //    	$usergrTable = TableRegistry::get('UserGroupTbl');
		// $result = $userTable->find('all')->select(['personal_email', 'fullname', 'slogan'])->toArray();
		// $this->set("result",$result);

  //    }
     public function data1(){
     		$userTable = TableRegistry::get('UserTbl');
			$result = $userTable->find('all')->select(['user_id', 'username', 'password'])->toArray();
			//print($result);
			$this->set("result",$result);

          // $data = $this->User->find_data();
          // $this->set('data' , $data);
     }
     public function testComponent(){

    	 $q = $this->Data->math();
    	 $this->set("q123",$q);
 	}
 	
 	// public function send(){
 	// 	$email = new Email('default');
  //         $email->transport('default');
  //         $email->to('vutuyetnhung.jvb@gmail.com');
  //        $email->template('view');
  //         $email->subject('Chúc mừng bạn đã trở thành admin');
  //        // $email->viewVars(['usser' => 'aaaaa']);//truyen tham so vao trong view.ctp
  //        $email->send();
  //    }
 	}
?>