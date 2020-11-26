<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class Res extends ActiveRecord{


	public static function primaryKey()
      {
          return ['id'];
      }

	public static function tableName(){
		return 'res';
	}

    public static function getDb()
    {
        return Yii::$app->getDb('db');
    }
}