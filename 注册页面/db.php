
<?php
 
 header("content-type:text/html;charset=utf-8");
 

$userName=$_POST['userName'];
$password=$_POST['password'];

//$db=mysqli_connect("localhost","root","Zy491223","",3306);//zze的数据库
$db=mysqli_connect("localhost","root","123456","",3306);//赖华溢的数据库
 //检验是否连接成功
 if(mysqli_connect_errno()){
     echo("Error:Couldnot connect the database");
     exit;
 }
 //se_project是数据库的名字 user_information是用户信息表
 $q="insert into se_project.sign_info(account,password) values('$userName','$password')";//插入数据的mysql在这里，values(账户，密码) 都是用varchar储存
 $result=mysqli_query($db,$q);
 if(!$result){
     echo("fail to insert data");
 }else{
     echo("success in insert data");
 }
 mysqli_free_result($result);
 mysqli_close($db);//close mysql
 

 /*
//$username = ($_POST['userName']);
//$password = trim($_POST['password']);
$userName="ttest";
$password="ttestpass";

$conn = mysqli_connect("localhost","root","123456","",3306);      
//如果有错误，存在错误号
if (mysqli_errno($conn)) {
    echo mysqli_error($conn);
    exit;
}
mysqli_select_db($conn, 'se_project');   //选择数据库
mysqli_set_charset($conn, 'utf8');   //选择字符集
$sql = "insert into user_information ( account,password)  values ('$username','$password' )";
$result = mysqli_query($conn,$sql);//针对user这个数据库进行查询, 查询是否存在有这个用户
$row = mysqli_num_rows($result);//输出查询结果，传给$row
/*if($_POST['userName']==NULL){
    echo "<script>alert('用户名不能为空');location.href='注册界面.html';</script>";
}
else if($_POST['password']== NULL){
    echo "<script>alert('密码不能为空');location.href='注册界面.html';</script>";
}
else{
    if($row){
        echo "<script>alert('用户名已存在');location.href='注册界面.html';</script>";
    }else{
        $sql1 ="insert into user_information(account,password) values('".$username."','" .$password."')";//PHP MySQL 插入数据
        $result = mysqli_query($conn,$sql1);//判断插入数据是否成功
        if($row){
            echo "<script>alert('注册失败！');location.href='注册界面.html';</script>";            	
        }else{           
            echo "<script>alert('注册成功！');location.href='注册界面.html';</script>";
        }
    }

mysqli_close($conn);
*/
 ?>