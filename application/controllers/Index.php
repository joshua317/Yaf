<?php
class IndexController extends BaseController{

	public function indexAction()
	{
		$this->getView()->assign("content", "Hello World");
	}

}
?>