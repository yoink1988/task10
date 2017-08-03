<?php
include_once __DIR__.'/lib/Sql.php';
include_once __DIR__.'/lib/config.php';


$sql = new Sql();

//$sql->select()->setTable('MY_TEST')->setOrder('key')->setDistinct(true)
//    ->setColumns('key, data')->setWhere('key = user9')->setGroup('key')->leftJoin('ddd')->exec();

//$sql->update()->setTable('dsds')->setParams(array('key' => 'dsad','data' => 'asdasd'))->setLimit(1)->exec();

//$sql->insert()->setTable('MY_TEST')->setColumns('key, data')->setParams(array('dsss'=>'dsds','dsdsd'=>'dsd'))->exec();
//$sql->delete()->setTable('MY_TEST')->exec();


include_once 'templates/index.php';
?>
