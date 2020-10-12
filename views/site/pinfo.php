<?php

foreach ($info as $value) {
	foreach ($value as $values) {
		echo $values;
	}
}
$session = Yii::$app->session;
$session->open();
echo $session['db'];

?>
