<?php
include_once './config.php';

$userName = $_POST['userName'];
$userPwd = $_POST['userPwd'];

$link = mysqli_connect($host, $user, $pwd, $dbname, $port);

$sql = "SELECT `id` FROM `user` WHERE `name` = '{$userName}' AND `pwd` = '{$userPwd}'";

$result = mysqli_query($link, $sql);

$arr = mysqli_fetch_all($result);

if(count($arr) == 1){
    echo json_encode(['result'=>1,'msg'=>'登录成功']);

    // 通过后端程序,操作cookie
    // setcookie( 'login' , 1 , time()+60*60 , '/' );
    // setcookie( 'name' , 1 , time()+60*60 , '/' );
    // setcookie( 'age' , 1 , time()+60*60 , '/' );
    // setcookie( 'sex' , 1 , time()+60*60 , '/' );

}else{
    echo json_encode(['result'=>0,'msg'=>'登录失败']);
}