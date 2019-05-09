<?php
class Controller{
	public function show(){
		$model = new Model;
		$text = $model->get();
		$view = new View;
		$view->display($text);
	}
}