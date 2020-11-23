<?php

namespace app\components;
use yii\base\Widget;
use app\models\Menu;
use Yii;

class MenuWidget extends Widget{

	public $tpl;
	public $data;
	public $tree;
	public $menuHtml;
	public $model;

	public function init(){
		parent::init();
		if($this->tpl === null){
			$this->tpl = 'menu';
		}
		$this->tpl .='.php';
	}

	// public function run(){
	// 	$this->data = Menu::find()->indexBy('id')->asArray()->all();
	// 	$this->tree = $this->getTree();
	// 	$this->menuHtml = $this->getMenuHtml($this->tree);
	// 	return $this->menuHtml;
	// }
//

    public function run(){
        // get cache
        // if($this->tpl == 'select.php'){
        //     $menu = Yii::$app->cache->get('select');
        //     if($menu) return $menu;
        // }

        $this->data = Menu::find()->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->tree);
        // set cache
        if($this->tpl == 'select.php'){
            Yii::$app->cache->set('select', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    } 

	// 
	protected function getTree(){
    $tree = [];
    foreach ($this->data as $id=>&$node) {
        if (!$node['parent_id'])
            $tree[$id] = &$node;
        else
            $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
    }
    return $tree;
	}

		protected function getMenuHtml($tree, $tab = ''){
	    $str = '';
	    foreach ($tree as $category) {
	        $str .= $this->catToTemplate($category, $tab);
	    }
	    return $str;
	}

	protected function catToTemplate($category, $tab){
	    ob_start();
	    include __DIR__ . '/menu_tpl/' . $this->tpl;
	    return ob_get_clean();
	}



}