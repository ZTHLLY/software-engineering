<?php
$fusername=$_POST['name'];
$fuserpassword=$_POST['password'];
 header("content-type:text/html;charset=utf-8");
//$db=mysqli_connect("localhost","root","Zy491223","",3306);//连接zzer的本地数据库
$db=mysqli_connect("localhost","root","123456","",3306);//赖华溢的数据库
 //检验是否连接成功
 if(mysqli_connect_errno()){
     echo("Error:Couldnot connect the database");
     exit;
 }
 $sq = "SELECT account,password FROM se_project.sign_info WHERE account = '$fusername' and password = '$fuserpassword';";
 $result = mysqli_query($db,$sq);
 while($row=mysqli_fetch_assoc($result)){
    echo $row["account"];
    //echo $row["password"];
    if ($fusername == $row["account"] && $fuserpassword == $row["password"]) {
        echo "登录成功！";
        mysqli_close($db);
    } else {
        echo "登陆失败";
        mysqli_close($db);
    }
 }

