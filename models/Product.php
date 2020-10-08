<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Product extends ActiveRecord{


	public static function primaryKey()
      {
          return ['id'];
      }

	public static function tableName(){
		return 'product';
	}


	      public static function getDb()
    {
    	$id = Yii::$app->request->get('id');
                
        if($id=='1')
            return Yii::$app->get('db');
        if($id=='2')
            return Yii::$app->get('portal_2');
    }
    

}