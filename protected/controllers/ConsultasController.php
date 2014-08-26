<?php

class ConsultasController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function actionIndex()
	{
            //Busca la primera fila que cumpla con la condición
            $bienes=Bienes::model()->find("categoria_id = 3");
            
            $this->render('index',array('bienes'=>$bienes));
            
        }

	
}
