test.php
<?php 
//classの呼び出し
include_once "./../class/2chClass.php";
?>
<br><hr>
<?php
$obj=new index();
//var_dump($obj);
$select_querry = $obj->select_info();
var_dump($select_querry);
echo "<br>";
foreach($select_querry as $key =>$value){
	//$smt.="<a href="."./details.php/?id=".
	//htmlspecialchars($value["id"],ENT_QUOTES,'UTF-8').">".$value["keyword"]."</a><br>";
	$smt.= "id:".$value["id"]."<br>";
	$smt.= "----:".$value["title"]."<br>";
	$smt.= "----:".$value["block"]."<br>";
	$smt.= "<hr>";	
}
echo $smt;
?>