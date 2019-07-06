<?php
//db接続用のファイル
include dirname(__FILE__) ."./../conf/db_connect.php";
?>
<?php
class index{
	
	public function select_info(){
	global $db; //includeの＄ｄｂ変数取得
	$sql .="select * from channel";
	$sql .=" where true ";
	$sql .=" order by id desc";
	$info= $db->query($sql);
	$results= $info->fetchAll(PDO::FETCH_ASSOC);
	return $results;		
	}
	
	public function select_detail($id){
	global $db; //includeの＄ｄｂ変数取得
	$sql="select * from channel where id=".$id;
	$info= $db->query($sql);
	$results= $info->fetchAll(PDO::FETCH_ASSOC);
	return $results;		
	}
	
	
}
?>