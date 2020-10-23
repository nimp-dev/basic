<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\Menu;
use app\models\Product;

class MenuController extends AppController
{
	
    public function actionIndex()
    {
        $res = [1 => 'Port Place (base_1)',
                2 => 'Evropeysiy (base_2)'
                ];      
        return $this->render('index',['res'=>$res]);
    }

            public function actionView($id)
    {   
        $session = Yii::$app->session;
        $session->open();
        $session->set('db',$id);
        $menu = Menu::find()->all();
        $products = Product::find()->all();
        return $this->render('view', ['menu'=>$menu,'products'=>$products]);

    }

    	public function actionViewcat($id)
    	{
    		$catproduct = Product::find()->with('menu')->where(['category_id'=> $id])->all();
    		return $this->render('viewcat',['catproduct'=>$catproduct]);
    	}
}