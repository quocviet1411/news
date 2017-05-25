<?php
	include ('controller.php'); 
	class Single_controller extends Controller {
		public function getSingle(){
			return $this->loadView('single');
		}
	}
 ?>