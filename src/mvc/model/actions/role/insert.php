<?php
/*
 * Describe what it does or you're a pussy
 *
 **/

/** @var $model \bbn\mvc\model*/

$res = false;
if ( isset($model->data['id_task'], $model->data['role'], $model->data['id_user']) ){
	$pm = new \bbn\appui\tasks($model->db);
  $res = $pm->add_role($model->data['id_task'], $model->data['role'], $model->data['id_user']);
}
return ['success' => $res];