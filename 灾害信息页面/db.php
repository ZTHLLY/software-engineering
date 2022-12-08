<?php
 
 header("content-type:text/html;charset=utf-8");
 

$comment=$_POST['comment'];

$db=mysqli_connect("localhost","root","Zy491223","",3306);//zze的数据库
//$db=mysqli_connect("localhost","root","123456","",3306);//赖华溢的数据库
 //检验是否连接成功
 mysqli_select_db($db,"se_project");
 
 if(mysqli_connect_errno()){
     echo("Error:Couldnot connect the database");
     exit;
 }
 //se_project是数据库的名字 user_information是用户信息表
 $q="insert into se_project.comment(comment) values('$comment')";//插入数据的mysql在这里，values(账户，密码) 都是用varchar储存
 $result=mysqli_query($db,$q);
 if(!$result){
     echo("fail to insert data");
 }else{
     echo("success in insert data");
 }
 mysqli_free_result($result);
 mysqli_close($db);