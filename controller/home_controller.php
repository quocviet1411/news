<?php
	include ('controller.php'); 
	include('model/home_model.php');
	class Home_controller extends Controller {
		public function getIndex(){
			$model = new Home_model;
			$data = $model->getSlide();
			$mangData = array('slide'=>$data); 
			return $this->loadView('trangchu',$mangData);
		}
	}
 ?>