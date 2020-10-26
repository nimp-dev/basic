<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Info extends ActiveRecord{


	public static function primaryKey()
      {
          return ['id'];
      }

	public static function tableName(){
		return 'info';
	}


	      public static function getDb()
    {
    	$base = Yii::$app->session['db'];
                
        if($base=='1')
            return Yii::$app->get('db');
        if($base=='2')
            return Yii::$app->get('portal_2');
    }
    

}