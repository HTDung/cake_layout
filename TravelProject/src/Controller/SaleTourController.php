<?php
	namespace App\Controller;
	use App\Controller\AppController;
	use Cake\ORM\TableRegistry;
	use Cake\ORM\Table;
	use Cake\ORM\Entity;
	use Cake\ORM\Query;
	class SaleTourController extends AppController{
		function initialize(){
			$this->viewBuilder()->layout('adminLayout');
		}
		// function index(){
		// 	$this->viewBuilder()->layout('adminLayout');
		// }

		function tourkm(){
			$proTable = TableRegistry::get('Khuyenmai');
			$tour = TableRegistry::get('Tour');
			$tour1 = $tour->find('list', ['keyField' => 'MaTour', 'valueField' => 'TenTour']) -> toArray();
			$result = $proTable->find('all')
			->select(['Khuyenmai.MaKMai','Khuyenmai.MaTour','Khuyenmai.TenKMai','Khuyenmai.NgayBD','Khuyenmai.NgayKT','Khuyenmai.Ghichu','Tour.MaTour'])
			->join([
				'table' => 'tour',
				'alias' => 'Tour',
				'type' =>'LEFT',
				'conditions' => 'Khuyenmai.MaTour=tour.MaTour',
			])
			->toArray();
			$this->set("data",$result);
			$this->set("cttour",$tour1);
		}
		function addtourkm(){
			$proTable = TableRegistry::get('Khuyenmai');
			$tour = TableRegistry::get('Tour');
			$tour1 = $tour->find('all') -> select(['MaTour','TenTour']) -> toArray();
			$this->set("tour1",$tour1);
			$pro = $proTable -> newEntity();
			$cttour = $tour->newEntity();
			if($this->request->is('POST')){
				$data = $this ->request->data;
				$pro['MaTour'] = isset($data['selecttour']) ? $data['selecttour'] : null;
				$pro['TenKMai'] = isset($data['TenKMai']) ? $data['TenKMai'] : null;
				$pro['NgayBD'] = isset($data['NgayBD']) ? $data['NgayBD'] : null;
				$pro['NgayKT'] = isset($data['NgayKT']) ? $data['NgayKT'] : null;
				$pro['Ghichu'] = isset($data['Ghichu']) ? $data['Ghichu'] : null;

				$proTable->patchEntity($pro,$data);
				if($proTable->save($pro)){
					$pro1 = $proTable->find('all')->select('MaKMai')->limit(1)->toArray();
					
					$cttour['MaTour'] = isset($data['selecttour']) ? $data['selecttour'] : null;
					$tour->save($cttour);
					return $this->redirect('/saletour/tourkm');
				}
			}
		}
		function deletetourkm($id){
			$proTable = TableRegistry::get('Khuyenmai');
     		$deletepro = $proTable->get($id);
     		$proTable->delete($deletepro);
     		return $this->redirect('/saletour/tourkm');
		}

		function edittourkm($id){
			$proTable = TableRegistry::get('Khuyenmai');
			$data=$proTable->find('all')->select(['MaKMai','TenKMai','NgayBD','NgayKT','Ghichu'])->where(['MaKMai' => $id])->first();
			// print_r($data);die;
			
			$this->set("data",$data);
			$pro1 = $proTable->newEntity();
			if(isset($this->request->getData()['update'])){
		        $data= $this ->request->data;

		        $pro1['TenKMai']= isset($data['TenKMai']) ? $data['TenKMai']:null;
		        $pro1['NgayBD']=isset($data['NgayBD']) ? $data['NgayBD']:null;
		        $pro1['NgayKT']=isset($data['NgayKT'])? $data['NgayKT']:null;
		        $pro1['Ghichu']=isset($data['Ghichu']) ? $data['Ghichu']:null;
		        $pro1['MaKMai'] = isset($data['MaKMai'])? $data['MaKMai'] : '';

		        $query=$proTable->query()->update()
		         ->set(['TenKMai'=>$pro1['TenKMai']])
		         ->set(['NgayBD'=>$pro1['NgayBD']])
		         ->set(['NgayKT'=>$pro1['NgayKT']])
		         ->set(['Ghichu'=>$pro1['Ghichu']])
		        ->where(['MaKMai'=>$pro1['MaKMai']])->execute();
		        return $this->redirect('/saletour/tourkm');
			}
		}
	}
?>