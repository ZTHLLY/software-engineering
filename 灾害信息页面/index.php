<?php

 header("content-type:text/html;charset=utf-8");
 



$db=mysqli_connect("localhost","root","Zy491223","",3306);//zze的数据库
//$db=mysqli_connect("localhost","root","123456","",3306);//赖华溢的数据库
 //检验是否连接成功
 if(mysqli_connect_errno()){
     echo("Error:Couldnot connect the database");
     exit;
 }
 
mysqli_select_db($db,"se_project");

$v="select num_of_volun_need, num_of_volun_cur from volun_need_info where num_of_volun_need=55";
$w="select supplies, target, current from supplies_need_info where supplies='water'";
$f="select supplies, target, current from supplies_need_info where supplies='food'";
$t="select supplies, target, current from supplies_need_info where supplies='tent'";
$result1=mysqli_query($db,$w);
if (!$result1) {
 printf("Error: %s\n", mysqli_error($db));
 exit();
}
$result2=mysqli_query($db,$f);
$result3=mysqli_query($db,$t);
$result4=mysqli_query($db,$v);
// $wa=array();
// while($wa1=mysqli_fetch_array($result1)){
//     $wa[]=$wa1;
// }
// $fo=array();
// while($fo1=mysqli_fetch_array($result2)){
//     $fo[]=$fo1;
// }
// $te=array();
// while($te1=mysqli_fetch_array($result3)){
//     $te[]=$te1;
// }
$wa=mysqli_fetch_array($result1);
$fo=mysqli_fetch_array($result2);
$te=mysqli_fetch_array($result3);
$vo=mysqli_fetch_array($result4);
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disater Event</title>
    <link rel="stylesheet" href="灾害信息页面.css">
</head>

<body>
    <!-- 导航栏 -->
    <div class="nav">
		
		
		
				<div class="topic">
					<div class="logo">
						<img src="./image/logo.png">
					</div>
					<div class="topic_text">
						<h1>Disater Event</h1>
					</div>
				</div>
				
				
				<div class="header">

					<div class="title">
						<a href="../主页面/主页面.html" ><div class="branch home"><p>Home</p></div></a>

					</div>
					

					
					<div class="user">
						<img src="./image/user_logo.png">
						
						<div class="pop">
						<a href="../个人信息页面/个人信息页面.html"><div class="information">个人信息</div></a>
						<a href="../注册页面/注册页面.html"><div class="information">注册</div></a>
						<a href="../登录页面/sign_in.html"><div class="information">目录</div></a>						
						</div>
					</div>
					
					
					<div class="research">
						<form action=""><input type="text">
						<img src="./image/research.png" onclick=""/>
						</form>
						
					</div>
					
					
				</div>
				


    </div>
    <!-- 正文栏 -->
    <div class="article">
        <!-- 大框1 -->
        <div class="first">
            <!-- 简介框 -->
            <div class="intro">
                <span>A volcano north of Tonga's main island has erupted eight times in the past 48 hours,
                    according to theTonga Geological Service. The authorities warned sailors to keep their
                    distance from the volcano.</span>

            </div>
            <!-- 轮播图 -->
            <div class="line ppt">
                <div class="slide">
                    <span>
                        <div class="slideshow">
                        <img src="./image/1.jpg" class="image-slide img1" alt="">
                        <p class="blank text1">病床</p>
                        
                        <img src="./image/2.jpg" class="image-slide img2" alt="">
                        <p class="blank text2">死人啦！！</p>
                        
                        <img src="./image/3.jpg" class="image-slide img3" alt="">
                        <p class="blank text3">封城啦</p>
                        <img src="./image/4.jpg" class="image-slide img4" alt="">
                        <p class="blank text4">美国疫情</p>
                        
                        <img src="./image/left.png" class="turn_left" alt="" onclick="lastOne()">
                        <img src="./image/right.png" class="turn_right" alt="" onclick="nextOne()">
                    
                    </div>
                    </span>
                     <!--轮播图-->
                    
                </div>

            </div>

                
                <!-- 细节框 -->
                <div class="line details">
                    <span>
                        Reports say the volcano has been spewing lava andforming large amounts of ash for the past 10
                        days. Asthe eruption gathers speed,
                        the local alert level hasbeen raised to orange and pilots should be carefulwhen flying over the
                        airspace near the volcano.
                        Tonga is an archipelagic country with about 100,000people spread across 171 islands and is known
                        toexperience considerable seismic activity.
                        

                    </span>
                </div>
            </div>
            <!-- 大框2 -->

            <div class="second">
                <div class="line2 Vol"><span>VOLUNTEER</span></div>
                <div class="line2 Num">
                    <table>
                        <tr>
                            <td class="DDD">Number of Volunteers needed</td>
                            <td class="DDD"></td>
                            <td class="DDD">Current number of volunteers</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="GGG"><span class="mmm" name="V1"><?php echo $vo['num_of_volun_need']; ?></span></div>
                            </td>
                               <td class="GGGS"></td>
                            <td>
                                <div class="GGG"><span class="mmm"><?php echo $vo['num_of_volun_cur']; ?></span></div>
                            </td>
                        </tr>
                    </table>

                </div>
                <!-- Supply那行 -->
                <div class="line3 Sup"><p class="SSSS">Supplies</p></div>
                <div class="line3 Num2">
                    <table>
                        <tr>
                            <td> 	

                                <p style="text-align:center" class="BBB">The supplies we need</p></td>
                            <td> 	

                                <p style="text-align:center" class="BBB P">Target</p></td>
                            <td> 	

                                <p style="text-align:center" class="BBB PP">Current</p></td>
                        </tr>
                        <tr>
                            <td><div class="OOO BBB"><span class="TTT"><?php if(!empty($wa['supplies'])){echo $wa['supplies'];} ?></span></div></td>
                            <td><div class="PPP BBB"><span class="ttt"><?php if(!empty($wa['target'])){echo $wa['target'];} ?></span></div></td>
                            <td><div class="WWW BBB"><span class="ttt"><?php if(!empty($wa['current'])){echo $wa['current'];} ?></span></div></td>
                        </tr>
                        <tr>
                            <td><div class="OOO BBB"><span class="TTT"><?php echo $fo['supplies']; ?></span></div></td>
                            <td><div class="PPP BBB"><span class="ttt"><?php echo $fo['target']; ?></span></div></td>
                            <td><div class="WWW BBB"><span class="ttt"><?php echo $fo['current']; ?></span></div></td>
                        </tr>
                        <tr>
                            <td><div class="OOO BBB"><span class="TTT"><?php echo $te['supplies']; ?></span></div></td>
                            <td><div class="PPP BBB"><span class="ttt"><?php echo $te['target']; ?></span></div></td>
                            <td><div class="WWW BBB"><span class="ttt"><?php echo $te['current']; ?></span></div></td>
                        </tr>
                    </table>

                </div>
                <!-- 爱心那行 -->
                <div class="line4">
                    <ul>
                        <li class="love"><img src="./image/love.png" alt=""></li>
                        <li class="donate">
                            <a href="../捐献者页面/捐赠者页面.html"><div class="M DON "><P class="VVVV">DEVOTE</P></div></a>
                        </li>
                        <li class="volunteer">
                            <a href="../志愿者页面/志愿者页面.html"><div class="M VOL "><p class="VVVV">VOLUNTEER</p></div></a>
                        </li>
                    </ul>
                </div>

                <div class="line5 Com">
                    <p class="CCCC">Comments</p>
                </div>
                <!-- Comments 那行 -->
                <form action="db.php" method="post" onsubmit="return enter()">
                <div class="line5 G">
                    <div class="Please">

                        <textarea cols="70" name= "comment" rows="8" class="COMCOM">Please login to comment
                        </textarea>
                    </div>
                    <div class="post"><p ><button type="button" >POST</button></p></div>
                </div>






            </div>
            <!-- 结尾插画 -->
            <div class="end"><img src="../image/end.png" alt="" width="1000px"></div>
        </div>
    </div>

</body>
<script type="text/javascript" src="灾害信息页面.js"></script>


</html>