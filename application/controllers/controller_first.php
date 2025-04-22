<?php

class Controller_First extends Controller {

	function __construct() {
		$this->model = new Model_First();
		$this->view = new View();
	}
	
	function action_index() {
		$data = $this->model->get_data();		
		$this->view->generate('first_view.php', 'template_view.php', $data);
	}
	
}
