<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

class Order extends ActiveRecord{



	public function behaviors(){
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
                'value' => new Expression('NOW()'),
            ],
        ];
    }


	public static function tableName(){
		return 'order';
	}

	public function getOrderItems(){
		return $this->hasMany(OrderItems::className(), ['order_id'=>'id']);
	}

    public function rules()
    {
        return [
            [['name', 'phone', 'address'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['qty'], 'integer'],
            [['sum'], 'number'],
            [['status'], 'boolean'],
            [['name', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'address' => 'Адрес',
        ];
    }



//   public function getMenu(){
//     return $this->hasOne(Menu::className(),['id' => 'category_id']);
// }
        public static function getDb()
    {
      $base = Yii::$app->session['db'];
                     
        if($base=='port_place')
            return Yii::$app->get('port_place');
        if($base=='graphit_park')
            return Yii::$app->get('graphit_park');;
    }
    

}