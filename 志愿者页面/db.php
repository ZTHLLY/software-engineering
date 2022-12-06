<?php
 
header("content-type:text/html;charset=utf-8");

$name=$_POST['name'];
$phone_number=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$identity=$_POST['identity'];

//$db=mysqli_connect("localhost","root","Zy491223","",3306);//连接zze的本地数据库
$db=mysqli_connect("localhost","root","123456","",3306);//赖华溢的数据库
if(mysqli_connect_errno()){
     echo("Error:Couldnot connect the database");
     exit;
}
else{
    echo("数据库连接成功");
}
//se_project是数据库的名字 user_information是用户信息表
$q="insert into se_project.volun_info(name,phone_number,address,email,identity) values ('$name','$phone_number','$address','$email','$identity')";//插入数据的mysql在这里，values() 都是用varchar储存
$result=mysqli_query($db,$q);
if(!$result){
    echo("fail to insert data");
}else{
    echo("success in insert data");
}
@ mysqli_free_result($result);
mysqli_close($db);//close mysql
?>