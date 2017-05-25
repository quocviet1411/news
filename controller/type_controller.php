<?php
	include ('controller.php'); 
	class Type_controller extends Controller {
		public function getType(){
			return $this->loadView('type');
		}
	}
 ?>