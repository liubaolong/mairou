<?php
try{
	$dsn = "mysql:host=localhost;charset=utf8;dbname=qf_bargain";
	$pdo = new PDO($dsn,'root','');
} catch(PDOException $e) {
	echo '数据库链接失败';
}
$user = $_POST['user'];
$stmt = $pdo->query("select * from qf_user where wx_name='$user'");
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
	$data = ['code'=>0,'info'=>'用户名已经存在'];
}else {
	$data = ['code'=>1,'info'=>'可以注册'];
}
echo json_encode($data);