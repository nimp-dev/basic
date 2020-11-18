<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Menu extends ActiveRecord{

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
		return 'menu';
	}

      public function getProduct(){
    return $this->hasMany(Product::className(),['category_id' => 'id']);
}

     public function attributeLabels()
    {
        return [
            'id' => '№ категории',
            'parent_id' => 'Родительская категория',
            'name' => 'Название',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
        ];
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