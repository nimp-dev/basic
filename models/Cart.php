<?php
namespace app\models;
use yii\db\ActiveRecord;


class Cart extends ActiveRecord
{
	    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
    
	public function addToCart($product, $qty = 1){
        $mainImg = $product->getImage();
				if(isset($_SESSION['cart'][$product->id])){
			$_SESSION['cart'][$product->id]['qty'] += $qty;
		}else{
			$_SESSION['cart'][$product->id] = [
				'qty'=>$qty,
				'name'=>$product->name,
				'price'=>$product->price,
				'img'=>$mainImg->getUrl()
			];
		}
		$_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
		$_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
        $_SESSION['cart.name'] = $_SESSION['db'];
	}

	public function recalc($id){
        if(!isset($_SESSION['cart'][$id])) return false;
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $sumMinus = $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'][$id]);
        if(empty($_SESSION['cart'])) {unset($_SESSION['cart.name']);} // не стабильно
    } 

    	public function pluse($id){

        $qtyPluse = 1;
        $sumPluse =$_SESSION['cart'][$id]['price'];
        $_SESSION['cart'][$id]['qty'] += $qtyPluse;
        $_SESSION['cart.sum'] += $sumPluse  ;
        $_SESSION['cart.qty'] += 1;
    } 

    	public function minus($id){

        $qtyMinus = 1;
        $sumMinus =$_SESSION['cart'][$id]['price'];
        $_SESSION['cart'][$id]['qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        $_SESSION['cart.qty'] -= 1;
        if($_SESSION['cart'][$id]['qty'] == 0){
        	unset($_SESSION['cart'][$id]);
        }
    }

}