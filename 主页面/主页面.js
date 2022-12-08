var images = document.getElementsByClassName("image-slide");
var text = document.getElementsByClassName("blank");
var point = document.getElementsByClassName("point");
var branch = document.getElementsByClassName("branch");
var index = 0;


function nextOne(){
	index++;
	if (index >= images.length) index=0
	for(var i=0;i<images.length;i++){
	    images[i].style.display='none';
		text[i].style.display=" none";
		point[i].style.background = "rgba(0, 0, 0, 0.6)";
	}
	images[index].style.display='block';
	text[index].style.display=" block";
	point[index].style.background = "#fff";
}
//效果
function lastOne() {
    index--;
    if(index<0) index=images.length-1;
	for(var i=0;i<images.length;i++){
	    images[i].style.display='none';
		text[i].style.display=" none";
		point[i].style.background = "rgba(0, 0, 0, 0.6)";
	}
	images[index].style.display='block';
	text[index].style.display=" block";
	point[index].style.background = "#fff";
}

function decided(number){
	index = number;
	for(var i=0;i<images.length;i++){
	    images[i].style.display='none';
		text[i].style.display=" none";
		point[i].style.background = "rgba(0, 0, 0, 0.6)";
	}
	images[index].style.display='block';
	text[index].style.display=" block";
	point[index].style.background = "#fff";
	
}

function alert(class_name){
	choosed = class_name;
	for(var i=0;i<branch.length;i++){
		branch[i].style.background = "rgb(56, 182, 255)";
	}
	branch[choosed].style.background = "#0094cb"
}
	

//设置定时器，每隔两秒切换一张图片 很奇怪 这里不能带括号
setInterval(nextOne,3000);