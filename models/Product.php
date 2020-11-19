<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Product extends ActiveRecord{

      public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }


	public static function primaryKey()
      {
          return ['id'];
      }

	public static function tableName(){
		return 'product';
	}

  public function getMenu(){
    return $this->hasOne(Menu::className(),['id' => 'category_id']);
}
        public static function getDb()
    {
      $base = Yii::$app->session['db'];
                
        if($base=='port_place')
            return Yii::$app->get('port_place');
        if($base=='silver')
            return Yii::$app->get('silver');
    }
    

}