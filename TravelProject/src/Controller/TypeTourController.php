<?php
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\ORM\TableRegistry;
	use Cake\ORM\Table;
	use Cake\ORM\Entity;
	use Cake\ORM\Query;
	class TypeTourController extends AppController{
		function initialize(){
			$this->viewBuilder()->layout('adminLayout');
		}
		function typecttour(){
			$typeTable = TableRegistry::get('Loaitour');
			$result = $typeTable->find('all')
			->select(['Loaitour.MaLoaiTour','Loaitour.LoaiTour'])
			->toArray();
			$this->set("data",$result);
		}
		function addtypetour(){
			$typeTable = TableRegistry::get('Loaitour');
			$type = $typeTable -> newEntity();
			if($this->request->is('POST')){
				$data = $this ->request->data;
				$type['LoaiTour'] = isset($data['LoaiTour']) ? $data['LoaiTour'] : null;

				$typeTable->save($type);
				return $this->redirect('/typetour/typecttour');
			}
		}
		function edittypetour($id){
			$typeTable=TableRegistry::get('Loaitour');
			$data=$typeTable->find('all')->select(['MaLoaiTour','LoaiTour'])->where(['MaLoaiTour' => $id])->first();
			$this->set("data",$data);
			$type = $typeTable->newEntity();
			if(isset($this->request->getData()['update'])){
		        $data= $this ->request->data;

		        $type['LoaiTour']= isset($data['LoaiTour']) ? $data['LoaiTour']:null;
		        $type['MaLoaiTour'] = isset($data['MaLoaiTour'])? $data['MaLoaiTour'] : '';

		        $query=$typeTable->query()->update()
		         ->set(['LoaiTour'=>$type['LoaiTour']])
		        ->where(['MaLoaiTour'=>$type['MaLoaiTour']])->execute();
		        return $this->redirect('/typetour/typecttour');
			}
		}
		function deletetypetour($id){
			$tourTable = TableRegistry::get('Tour');
			$tour = $tourTable->find('all')->select(['MaTour','MaLoaiTour'])->where(['MaLoaiTour'=>$id])->toArray();
			foreach ($tour as $key => $value) {
				$query=$tourTable->query()->update()
					->set(['MaLoaiTour' => null])
					->where(['MaTour'=>$value['MaTour']])->execute();
			}
			$typeTable = TableRegistry::get('Loaitour');
     		$type = $typeTable->get($id);
     		$typeTable->delete($type);
     		return $this->redirect('/typetour/typecttour');
		}
		
	}
?>