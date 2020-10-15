<?php

namespace app\models;
use yii\db\ActiveRecord;


class Res extends ActiveRecord{


	public static function primaryKey()
      {
          return ['id'];
      }

	public static function tableName(){
		return 'res';
	}

}