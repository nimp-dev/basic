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
                
        if($base=='port_place')
            return Yii::$app->get('port_place');
        if($base=='graphit_park')
            return Yii::$app->get('graphit_park');
    }
    

}