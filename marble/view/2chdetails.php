2chdetails.php
<?php 
//classの呼び出し
include_once "./../class/2chClass.php";
?>
<br><hr>
<?php
echo $_GET[id];
$id = $_GET[id];
$obj=new index();

$select_querry = $obj->select_detail($id);
foreach($select_querry as $key =>$value){
	$smt.= "id:".$value["id"]."<br>";
	$smt.= "title:".$value["title"]."<br>";
	$smt.= "block:".$value["block"]."<br>";
	$smt.= "<hr>";	
}
echo $smt;
?>