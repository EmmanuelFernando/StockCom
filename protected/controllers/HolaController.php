<?php
#http://localhost/yii/inventario/hola/index
class HolaController extends Controller
{
	public function actionIndex()
	{
		$model=Productos::model()->findAll();
		$twitter="@inventario";			
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));	
	}
}
?>